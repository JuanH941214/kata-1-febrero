# kata-activity-volunteer-2

**Kata 25 per l'especialitat fullstackPHP 18-1-24**

Es tracta de continuar l'exercici plantejat a [kata-activity-volunteer](https://github.com/CloudSalander/kata-activity-volunteer.git)

Ara necessitem que els/les alumnes els carregui directament d'un JSON que tindrà el següent format:

```
{"alumnes": [
	{
		"nom":"nom1",
		"cognom":"cognom1"
	},
	{
		"nom":"nom2",
		"cognom":"cognom2"
	},
	.
	.
	.

]}
```

**IMPORTANT: NO HEU DE PUJAR l'arxiu JSON a github, o al menys, no amb dades sensibles :)**

 A partir d'aquest arxiu on figurin els alumnes actuals de l'aula, carregar l'informació al nostre programa.

L'**output** haurà de ser el mateix:

"A en Pepito li toca fer Masterclass!"
o 
"A la Pepita li toca explicar el shortcut de la setmana!"

Bonus track: Et veus amb cor de fer el mateix PERÒ a partir d'un arxiu excel? :D


kata
>kat_activity
....>activities.php
....>students.php
>index.php
>students.json