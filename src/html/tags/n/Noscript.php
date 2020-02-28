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

xhp class noscript extends :xhp:html_element {
  use XHPChildValidation;

  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\anyNumberOf(XHPChild\anyOf(
      XHPChild\pcdata(),
      XHPChild\category('%metadata'),
      XHPChild\category('%flow'),
    ));
  }

  category %flow, %phrase, %metadata;
  protected string $tagName = 'noscript';
}
