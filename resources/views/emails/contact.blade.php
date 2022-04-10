<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Prise de contact sur le site WindfoilFan</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
    @if (array_key_exists('fullname',$contact)) <li><strong>Nom</strong> : {{ $contact['fullname'] }}</li> @endif
    @if (array_key_exists('emailaddress',$contact)) <li><strong>Email</strong> : {{ $contact['emailaddress'] }}</li> @endif
    @if (array_key_exists('brand',$contact)) <li><strong>Marque</strong> : {{ $contact['brand'] }}</li> @endif
    @if (array_key_exists('subject',$contact)) <li><strong>Sujet</strong> : {{ $contact['subject'] }}</li> @endif
    @if (array_key_exists('comments',$contact)) <li><strong>Message</strong> : {{ $contact['comments'] }}</li> @endif
    @if (array_key_exists('password',$contact)) <li><strong>Mot de passe</strong> : {{ $contact['password'] }}</li> @endif

</ul>
</body>
</html>
