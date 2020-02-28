<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

use namespace Facebook\XHP\ChildValidation as XHPChild;

xhp class ol extends :xhp:html_element {
  use XHPChildValidation;
  attribute
    bool reversed,
    int start,
    enum {'1', 'a', 'A', 'i', 'I'} type;
  category %flow;

  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\anyNumberOf(XHPChild\ofType<:li>());
  }

  protected string $tagName = 'ol';
}
