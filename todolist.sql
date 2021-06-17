USE todolist;

SET AUTOCOMMIT = 0;
START TRANSACTION;

CREATE TABLE `tbl_task` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `doc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
