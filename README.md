Under the "Hide on screen" area of field groups there is a list of checkboxes. Checking these boxes hides specific items on the edit area where that field group is shown. 

However, if you have multiple field groups rendering on an edit screen, only the first field group will affect these items. E.g. marking the first field group to hide the content wysiwyg, and marking the second field group to hide the title will result in only the content wysiwyg being hidden, and the title being shown. The second field group rules are ignored. 

This plugin uses accumulative logic so that both the content wysiwyg as well as the title would be hidden on the edit screen. If any field group on the edit screen marks something to be hidden, it will be hidden. 
