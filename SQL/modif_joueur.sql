IF NEW.ts <> OLD.ts THEN  
UPDATE tb_users
	SET	 
		club_id     = NEW.club_id ,
		username  	= NEW.nom	  ,
		password  	= NEW.password,
		email     	= NEW.mail	  ,
		first_name	= NEW.prenom  ,
		last_name 	= NEW.nom	  ,
		avatar      = NEW.photo
		WHERE extension_id = NEW.id;
END IF