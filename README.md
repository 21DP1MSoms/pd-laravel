<h1 style = 'text-align: center;'>Kas ir API?</h1>

API ir lietojumprogrammu programmēšanas saskarnes akronīms - programmatūras starpnieks, kas ļauj divām lietojumprogrammām sazināties savā starpā. API ir pieejams veids, kā iegūt un kopīgot datus organizācijās un starp organizācijām.

<h1 style = 'text-align: center;'>Kā deklarēt mainīgo PHP valodā?</h1>

PHP valodā mainīgo definē ar $ zīmi.
<p>
Piemērs:
<p>

```php

$value = 1
$text = 'Kāpēc tu mani negribi?'

```

<h1 style = 'text-align: center;'>Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:</h1>

Laravel izmanto to saucamo MVC (Model-View-Controller) arhitektūru, kas principā nozīmē, ka šī arhitektūra nodala biznesa loģiku no prezentācijas loģikas, padarot kodu tīrāku, vieglāk pārvaldāmu un vieglāk kopjamu.

<h1 style = 'text-align: center;'>Kas ir ORM? Kāpēc to izmanto tīra SQL vietā?</h1>

ORM (Object Relational Mapping) ir programmēšanas metode, kas ļauj izstrādātājiem mijiedarboties ar datubāzi, izmantojot objektorientētas programmēšanas koncepcijas, nerakstot neapstrādātus SQL vaicājumus.

<h1 style = 'text-align: center;'>Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:</h1>

```php

return response()->json(User::where('rating', '>', 4))->get();
```