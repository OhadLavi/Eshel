$sql['0'] = "CREATE TABLE `" . addslashes($_POST['nameoftable']) . "` (
  `id` int(55) NOT NULL auto_increment,
  `firstandlastname` varchar(255) NOT NULL default 'No title',
  `phone` text NOT NULL,
  `address` varchar(255) NOT NULL default 'No title',
  `dateofcall` varchar(255) NOT NULL default 'No title',
  `col` varchar(255) NOT NULL default 'No title',
  `stat` varchar(255) NOT NULL default 'No title',
  `meeting` varchar(255) NOT NULL default 'No title',
  `meet`varchar(255) NOT NULL default 'No title',
  PRIMARY KEY  (`id`))";