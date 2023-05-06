USE TECNOVISION;

DELIMITER $$
CREATE PROCEDURE DELETE_EMPLEADO
(
	IN _ID_EMPLEADO BIGINT
)

BEGIN
	DELETE FROM EMPLEADO 
    WHERE ID_EMPLEADO = _ID_EMPLEADO;
END $$

DELIMITER $$
CREATE PROCEDURE DELETE_ECLIENTE
(
	IN _ID_CLIENTE BIGINT
)

BEGIN
	DELETE FROM CLIENTE 
    WHERE ID_CLIENTE = _ID_CLIENTE;
END $$

DELIMITER $$
CREATE PROCEDURE DELETE_PROVEEDOR
(
	IN _ID_PROVEEDOR BIGINT
)

BEGIN
	DELETE FROM PROVEEDOR 
    WHERE ID_PROVEEDOR = _ID_PROVEEDOR;
END $$