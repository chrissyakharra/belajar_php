CREATE DATABASE fakultas;

CREATE TABLE jurusan(
    id integer primary key auto_increment,
    kode char(4) not null,
    nama varchar(50) not null,
);

CREATE TABLE mahasiswa (
    id integer primary key auto_increment,
    id_jurusan integer not null,
    nim char(8) not null,
    nama varchar(50) not null,
    jenis_kelamin enum('laki-laki','perempuan') not null,
    tempat_lahir varchar(50),
    foreign key (id_jurusan) references jurusan(id)
);

    