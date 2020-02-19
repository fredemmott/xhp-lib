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

class :data extends :xhp:html-element {
  use XHPChildDeclarationConsistencyValidation;
  attribute string value @required;
  category %flow, %phrase;
  children (%phrase*);

  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\anyNumberOf(XHPChild\category('%phrase'));
  }

  protected string $tagName = 'data';
}
