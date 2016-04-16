# Creamos una tabla de ejemplo, tipo de dato `datetime`
CREATE TABLE ejemplo_fechas(
  id INT NOT NULL AUTO_INCREMENT,
  fecha DATETIME,
  PRIMARY KEY (id)
);

DESC ejemplo_fechas;

# https://dev.mysql.com/doc/refman/5.6/en/datetime.html
# The DATETIME type is used for values that contain both date and time parts. MySQL retrieves and displays DATETIME
# values in 'YYYY-MM-DD HH:MM:SS' format. The supported range is '1000-01-01 00:00:00' to '9999-12-31 23:59:59'.

# Fecha completa
INSERT INTO ejemplo_fechas (fecha) VALUES ('1995-06-29 14:14:14');

# Fechas parciales
# Invalid DATE, DATETIME, or TIMESTAMP values are converted to the “zero” value of the appropriate type
# ('0000-00-00' or '0000-00-00 00:00:00').
INSERT INTO ejemplo_fechas (fecha) VALUES ('2005-06-29 14:14');
INSERT INTO ejemplo_fechas (fecha) VALUES ('2015-06-29 14');
INSERT INTO ejemplo_fechas (fecha) VALUES ('2025-06-29');

# Inválido
INSERT INTO ejemplo_fechas (fecha) VALUES ('2025-06');

SELECT * FROM ejemplo_fechas;

# NOW() fechahora actual
SELECT * FROM ejemplo_fechas WHERE fecha < NOW();
SELECT * FROM ejemplo_fechas WHERE fecha > NOW();

# Registros del último año
SELECT * FROM ejemplo_fechas WHERE fecha BETWEEN (NOW() - INTERVAL 1 YEAR) AND NOW();

#   TRUNCATE ejemplo_fechas;