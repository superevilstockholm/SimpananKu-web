CREATE TABLE `users` (
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`email` VARCHAR(255) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP NOT NULL,
	`type` ENUM('admin', 'teacher', 'student') NOT NULL,
	PRIMARY KEY(`id`)
);


CREATE TABLE `student` (
	`nisn` VARCHAR(10) NOT NULL,
	`fullname` VARCHAR(255) NOT NULL,
	`dob` DATE NOT NULL,
	`major_id` INTEGER NOT NULL,
	`class_id` INTEGER NOT NULL,
	`user_id` INTEGER UNIQUE,
	PRIMARY KEY(`nisn`)
);


CREATE TABLE `teacher` (
	`nik` VARCHAR(16) NOT NULL,
	`fullname` VARCHAR(255) NOT NULL,
	`dob` DATE NOT NULL,
	`major_id` INTEGER NOT NULL,
	`class_id` INTEGER NOT NULL,
	`user_id` INTEGER UNIQUE,
	PRIMARY KEY(`nik`)
);


CREATE TABLE `major` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`name` VARCHAR(255) NOT NULL,
	PRIMARY KEY(`id`)
);


CREATE TABLE `class` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`nama_kelas` VARCHAR(255) NOT NULL UNIQUE,
	PRIMARY KEY(`id`)
);


CREATE TABLE `token` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`user_id` INTEGER NOT NULL UNIQUE,
	`token` VARCHAR(255) NOT NULL UNIQUE,
	PRIMARY KEY(`id`)
);


CREATE TABLE `tabungan` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`user_id` INTEGER NOT NULL UNIQUE,
	`nominal` DECIMAL(10, 2) NOT NULL,
	PRIMARY KEY(`id`)
);


CREATE TABLE `riwayat_transaksi` (
	`id` INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
	`user_id` INTEGER NOT NULL,
	`type` ENUM('penarikan', 'setoran') NOT NULL,
	`nominal` DECIMAL(10, 2) NOT NULL,
	`tanggal` TIMESTAMP NOT NULL,
	`keterangan` TEXT,
	PRIMARY KEY(`id`)
);


ALTER TABLE `student`
ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `teacher`
ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `student`
ADD FOREIGN KEY(`major_id`) REFERENCES `major`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `teacher`
ADD FOREIGN KEY(`major_id`) REFERENCES `major`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `student`
ADD FOREIGN KEY(`class_id`) REFERENCES `class`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `teacher`
ADD FOREIGN KEY(`class_id`) REFERENCES `class`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `riwayat_transaksi`
ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `token`
ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
ALTER TABLE `tabungan`
ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`)
ON UPDATE NO ACTION ON DELETE NO ACTION;
