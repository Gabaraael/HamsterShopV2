CREATE TABLE USUARIO(
	id BIGSERIAL PRIMARY KEY,
	flg_admin BOOLEAN NOT NULL DEFAULT FALSE,
	nome VARCHAR NOT NULL,
	telefone VARCHAR,
	senha VARCHAR NOT NULL,
	email VARCHAR NOT NULL unique
);

CREATE TABLE ORDEM_COMPRA (
	id BIGSERIAL PRIMARY KEY,	
	data_compra TIMESTAMP DEFAULT CURRENT_DATE,
	usuario_id BIGINT NOT NULL,
	constraint fk_usuario foreign key (usuario_id) references usuario (id)
);


 create table ESTOQUE (
	id BIGSERIAL PRIMARY KEY,
	quantidade BIGINT NOT NULL
);

create table CATEGORIA (
	id BIGSERIAL PRIMARY KEY,
	nome VARCHAR NOT NULL
);

create table ROEDOR (
	id BIGSERIAL PRIMARY KEY,
	especie VARCHAR NOT NULL	
);

CREATE TABLE PRODUTO (
	id BIGSERIAL PRIMARY KEY,
	preco VARCHAR NOT NULL,
	nome VARCHAR NOT NULL,
	image_link VARCHAR,
	roedor_id BIGINT NOT NULL,
	estoque_id BIGINT NOT NULL,	
	categoria_id BIGINT NOT NULL,
	constraint fk_roedor foreign key (roedor_id) references roedor (id),
	constraint fk_estoque foreign key (estoque_id) references estoque (id),
	constraint fk_categoria foreign key (categoria_id) references categoria (id)
);


CREATE TABLE ORDEM_COMPRA_PRODUTO (
	quantidade BIGINT NOT NULL DEFAULT 0,
	ordem_compra_id BIGINT NOT NULL,	
	produto_id BIGINT NOT NULL,
	constraint fk_ordem_compra foreign key (ordem_compra_id) references ordem_compra (id),
	constraint fk_produto foreign key (produto_id) references produto (id)
)

