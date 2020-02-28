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

xhp class hgroup extends :xhp:html_element {
  use XHPChildValidation;
  category %flow, %heading;

  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\atLeastOneOf(XHPChild\anyOf(
      XHPChild\ofType<:h1>(),
      XHPChild\ofType<:h2>(),
      XHPChild\ofType<:h3>(),
      XHPChild\ofType<:h4>(),
      XHPChild\ofType<:h5>(),
      XHPChild\ofType<:h6>(),
    ));
  }

  protected string $tagName = 'hgroup';
}
