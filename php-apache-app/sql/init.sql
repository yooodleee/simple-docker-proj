create table if not exists messages (
    id int auto_increment primary key,
    content varchar(255) not null,
    created_at timestamp default current_timestamp
);