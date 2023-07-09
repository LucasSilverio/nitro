
# Nitro
Esta é uma aplicação realizada para fins de teste com PHP.

Procurei utilizar os recursos que o PHP oferece pensando não apenas na simplicidade do que foi pedido, mas na possibilidade de desenvolver novas funcionalidades para esta aplicação, de forma que seja algo fácil e prático de se fazer e manter.

Foi criado um "mini sistema" de rotas para simplificar a organização do projeto, e para deixar a url mais amigável.


## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/LucasSilverio/nitro.git
```

Entre no diretório do projeto

```bash
  cd nitro
```

Inicie o container docker

```bash
  docker-compose up -d 
```

Crie o banco e a tabela

```
CREATE DATABASE `app-nitro` 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nivel` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
```


## Stack utilizada

**Front-end:** Bootstrap 5

**Back-end:** PHP 8.3, MySql 5.7, Docker


## Funcionalidades

- Listar Usuários Cadastrados
- Cadastrar novo Usuário

