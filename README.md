# Gerenciamento de feira

## Aplicaçao criada com PHP 7.1 e MySQL 5.7


### Criando o esquema:
```
CREATE SCHEMA `php_feira` ;
```

### Criando a tabela produtos:
```
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` varchar(45) DEFAULT 'Descricao do produto',
  `categoria_id` int(11) DEFAULT NULL,
  `disponivel` tinyint(1) DEFAULT '1',
  `imagem` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1
```

### Criando a tabela usuarios:
```
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
```

### Criando a tabela categorias:
```
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
```

### Inserindo um administrador:
O valor da senha é criptografado com MD5, para logar use: senhaAdmin
```
INSERT INTO `php_feira`.`usuarios` (`email`, `senha`)
VALUES ('seuEmail@admin.com', '498cf5f03c3e04c795e2519229916143');
```
Você pode criar sua própria senha com criptografia MD5 [Aqui](http://md5encryption.com/)
### Inserindo algumas categorias:
```
INSERT INTO `php_feira`.`categorias`
(`nome`)
VALUES
("Verduras"),
("Legumes"),
("Organicos"),
("Laticinios"),
("Temperos"),
("Guloseimas");
```


