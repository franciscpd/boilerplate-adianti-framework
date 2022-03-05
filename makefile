PHINX = ./vendor/bin/phinx
CONFIG = -c app/config/phinx.php

new-migration:
	$(PHINX) create $(name) $(CONFIG)

new-seed:
	$(PHINX) seed:create $(name) $(CONFIG)

migrate:
	$(PHINX) migrate $(CONFIG)

seed:
	$(PHINX) seed:run -s SystemGroupSeeder -s SystemUnitSeeder -s SystemProgramSeeder -s SystemUserSeeder -s SystemUserGroupSeeder -s SystemGroupProgramSeeder -s SystemUserUnitSeeder $(CONFIG)

rollback:
	$(PHINX) rollback -t 0 $(CONFIG)

serve:
	php -S 0.0.0.0:8080