<?php

namespace App\GraphQL\Types;

use App\Models\Quest;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class QuestType extends GraphQLType
{
  protected $attributes = [
    'name' => 'Quest',
    'description' => 'クエスト一覧',
    'model' => Quest::class
  ];

  public function fields(): array
  {
    return [
      'id' => [
        'type' => Type::nonNull(Type::int()),
        'description' => 'クエストのID'
      ],
      'title' => [
        'type' => Type::nonNull((Type::string())),
        'description' => 'クエスト名'
      ],
      'description' => [
        'type' => Type::nonNull(Type::string()),
        'description' => 'クエスト説明'
      ],
      'category' => [
        'type' => GraphQL::type('Category'),
        'description' => 'クエストのカテゴリー'
      ]
    ];
  }
}
