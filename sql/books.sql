
DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `author_name` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `books` VALUES (1,'C++ By Example','John','500','PR-123-A1','Programming'),(2,'Java Book','Jane davis','450','PR-456-A2','Programming'),(3,'Database Management Systems','Mark','300','DB-123-ASD','Database'),(4,'Harry Potter and the Order of the Phoenix','J.K. Rowling','650','FC-123-456','Novel'),(5,'Pride and Prejudice','Jane Austen','450','FC-456-678','Novel'),(6,'Learning Web Development ','Michael','300','ABC-123-456','Web Development'),(7,'Professional PHP & MYSQL Web Development','Author 2','340','PR-123-456','Web Development'),(8,'Professional Java Web Development','Author','300','PR-123-488','Web Development');
