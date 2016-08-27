-- Renseinger l'id du user dans la table du joueur
DELIMITER | 
CREATE TRIGGER cree_tb_users AFTER INSERT ON tb_users

FOR EACH ROW 
BEGIN  
	UPDATE foot_joueurs
	-- Jointure sur l'email
	SET tb_users_id = NEW.id
	WHERE mail = NEW.email;
END|
