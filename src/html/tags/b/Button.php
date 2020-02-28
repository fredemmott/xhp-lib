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

xhp class button extends :xhp:html_element {
  use XHPChildValidation;
  attribute
    bool autofocus,
    bool disabled,
    string form,
    string formaction,
    string formenctype,
    enum {'get', 'post'} formmethod,
    bool formnovalidate,
    string formtarget,
    string menu,
    string name,
    enum {'submit', 'button', 'reset'} type,
    string value;
  category %flow, %phrase, %interactive;
  // Should not contain interactive
  protected static function getChildrenDeclaration(): XHPChild\Constraint {
    return XHPChild\anyNumberOf(
      XHPChild\anyOf(XHPChild\pcdata(), XHPChild\category('%phrase')),
    );
  }

  protected string $tagName = 'button';
}
