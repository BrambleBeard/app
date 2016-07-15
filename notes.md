# Bramblebeard Application

## What does BrambleBeard do?

  * Stores encrypted text (passwords, keys, strings, etc.)
  * Allows user and group level visibility.
  * Lists and filters on dashboard.
  * Track access and views.

## What can it do later?

  * Creates expiring hashed URL's to share.
  * Include attachments.

## Tables
We'll include the standard tables - users, migrations, etc.

  * item - id,user_id,secret(hidden,hashed password,etc.),notes,url
  * tag - id,title,description
  * items_tags id,item_id,tag_id
  * share - id,user_id(owner),title,description
  * items_shares id,item_id,share_id
