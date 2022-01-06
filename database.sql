-- 1. create database todo

    create database todo;

-- 2. create tabel mytodo

    -- id
    -- task
    -- status (pending, completed)
    -- 1 = completed 2 = pending
    -- pending = 7 * 2 byte = 14 byte
    -- completed = 8 * 2 byte = 16 byte
    -- 1000
    -- 1 byte * 1000 = 1000 byte = 1kb
    -- 7 byte * 1000 = 7000 byte = 7kb

    CREATE TABLE `todo`.`mytodo` ( `id` INT(10) NOT NULL AUTO_INCREMENT COMMENT 'unique id for todo item' , `task_name` VARCHAR(300) NOT NULL , `status` TINYINT(1) NOT NULL DEFAULT '2' COMMENT '1 = completed, 2 = pending' , PRIMARY KEY (`id`)) ENGINE = InnoDB;