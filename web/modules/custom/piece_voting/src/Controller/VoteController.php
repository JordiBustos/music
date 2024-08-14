<?php

namespace Drupal\piece_voting\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

class VoteController extends ControllerBase {
  public function updateVote(Node $node, Request $request) {
    if ($node->getType() !== 'piece') {
      return new JsonResponse(['status' => 'error', 'message' => 'Invalid content type.'], 400);
    }

    $vote = $request->query->get('vote');

    if (!is_numeric($vote)) {
      return new JsonResponse(['status' => 'error', 'message' => 'Invalid vote parameter.'], 400);
    }

    if ($vote < 0 || $vote > 10) {
      return new JsonResponse(['status' => 'error', 'message' => 'Invalid vote value.'], 400);
    }

    $uid = $request->query->get("uid");
    $user = \Drupal\user\Entity\User::load($uid);
    $voted_nodes = $user->get('field_voted_nodes')->value;

    $voted_nodes_array = array_map('trim', explode(',', $voted_nodes));
    if (in_array($node->id(), $voted_nodes_array)) {
      return new JsonResponse(['status' => 'error', 'message' => 'You have already voted for this node.'], 403);
    }

    $total_votes = $node->get('field_total_votes')->value;
    $amount_of_votes = $node->get('field_amount_of_votes')->value;

    $new_amount = $amount_of_votes + 1;
    $new_total = $total_votes + $vote;

    $new_difficulty = $new_total / $new_amount;

    $node->set('field_difficulty', intval(floor($new_difficulty)));
    $node->set("field_total_votes", $new_total);
    $node->set("field_amount_of_votes", $new_amount);
    $node->save();

    $voted_nodes_array[] = $node->id();
    $user->set('field_voted_nodes', implode(',', $voted_nodes_array));
    $user->save();

    return new JsonResponse(['status' => 'success', 'message' => 'Vote updated.']);
  }
}
