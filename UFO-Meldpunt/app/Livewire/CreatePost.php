<?php

namespace App\Livewire;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Filament\Forms\Get;

class CreatePost extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('content')
                    ->columnSpan(2)
                    ->maxLength(65535),

Select::make('Provincie')
    ->label('Provincie')
    ->options([
        'Antwerpen' => 'Antwerpen',
        'Limburg' => 'Limburg',
        'Oost-Vlaanderen' => 'Oost-Vlaanderen',
        'West-Vlaanderen' => 'West-Vlaanderen',
        'Vlaams-Brabant' => 'Vlaams-Brabant',
        'Waals-Brabant' => 'Waals-Brabant',
        'Luik' => 'Luik',
        'Luxemburg' => 'Luxemburg',
        'Namen' => 'Namen',
        'Henegouwen' => 'Henegouwen',
        'Brussels' => 'Brussels',
    ])
    ->live(),

Select::make('Gemeente')
    ->label('Gemeente')
    ->options(fn (Get $get): array => match ($get('Provincie')) {
        'Antwerpen' => [
            'Antwerpen' => 'Antwerpen',
            'Aartselaar' => 'Aartselaar',
            'Boom' => 'Boom',
            'Brecht' => 'Brecht',
            'Deurne' => 'Deurne',
            'Duffel' => 'Duffel',
            'Edegem' => 'Edegem',
            'Ekeren' => 'Ekeren',
            'Grobbendonk' => 'Grobbendonk',
            'Hove' => 'Hove',
            'Kalmthout' => 'Kalmthout',
            'Kapellen' => 'Kapellen',
            'Kontich' => 'Kontich',
            'Lier' => 'Lier',
            'Malle' => 'Malle',
            'Mechelen' => 'Mechelen',
            'Meerhout' => 'Meerhout',
            'Mol' => 'Mol',
            'Niel' => 'Niel',
            'Olen' => 'Olen',
            'Putte' => 'Putte',
            'Ranst' => 'Ranst',
            'Rumst' => 'Rumst',
            'Schoten' => 'Schoten',
            'Schilde' => 'Schilde',
            'Stabroek' => 'Stabroek',
            'Westerlo' => 'Westerlo',
            'Zandhoven' => 'Zandhoven',
            'Zwijndrecht' => 'Zwijndrecht',
        ],
        'Limburg' => [
            'Alken' => 'Alken',
            'As' => 'As',
            'Beringen' => 'Beringen',
            'Bilzen' => 'Bilzen',
            'Bocholt' => 'Bocholt',
            'Dilsen-Stokkem' => 'Dilsen-Stokkem',
            'Genk' => 'Genk',
            'Hasselt' => 'Hasselt',
            'Heusden-Zolder' => 'Heusden-Zolder',
            'Kinrooi' => 'Kinrooi',
            'Lommel' => 'Lommel',
            'Maaseik' => 'Maaseik',
            'Maasgouw' => 'Maasgouw',
            'Meeuwen-Gruitrode' => 'Meeuwen-Gruitrode',
            'Neerpelt' => 'Neerpelt',
            'Overpelt' => 'Overpelt',
            'Peer' => 'Peer',
            'Pelt' => 'Pelt',
            'Sint-Truiden' => 'Sint-Truiden',
            'Tessenderlo' => 'Tessenderlo',
            'Tongeren' => 'Tongeren',
            'Voeren' => 'Voeren',
            'Zonhoven' => 'Zonhoven',
        ],
        'Oost-Vlaanderen' => [
            'Aalst' => 'Aalst',
            'Aalter' => 'Aalter',
            'Assenede' => 'Assenede',
            'Beervelde' => 'Beervelde',
            'Beveren' => 'Beveren',
            'Brakel' => 'Brakel',
            'Dendermonde' => 'Dendermonde',
            'De Pinte' => 'De Pinte',
            'Eeklo' => 'Eeklo',
            'Evergem' => 'Evergem',
            'Gent' => 'Gent',
            'Geraardsbergen' => 'Geraardsbergen',
            'Kaprijke' => 'Kaprijke',
            'Kruibeke' => 'Kruibeke',
            'Laarne' => 'Laarne',
            'Lokeren' => 'Lokeren',
            'Melle' => 'Melle',
            'Merelbeke' => 'Merelbeke',
            'Munte' => 'Munte',
            'Nazareth' => 'Nazareth',
            'Ninove' => 'Ninove',
            'Oostkamp' => 'Oostkamp',
            'Oosterzele' => 'Oosterzele',
            'Ronse' => 'Ronse',
            'Sint-Gillis-Waas' => 'Sint-Gillis-Waas',
            'Sint-Niklaas' => 'Sint-Niklaas',
            'Stekene' => 'Stekene',
            'Temse' => 'Temse',
            'Waarschoot' => 'Waarschoot',
            'Wetteren' => 'Wetteren',
            'Zele' => 'Zele',
            'Zomergem' => 'Zomergem',
            'Zwalm' => 'Zwalm',
        ],
        'West-Vlaanderen' => [
            'Brugge' => 'Brugge',
            'Diksmuide' => 'Diksmuide',
            'Damme' => 'Damme',
            'De Panne' => 'De Panne',
            'Gistel' => 'Gistel',
            'Houthulst' => 'Houthulst',
            'Ichtegem' => 'Ichtegem',
            'Ingelmunster' => 'Ingelmunster',
            'Koksijde' => 'Koksijde',
            'Koekelare' => 'Koekelare',
            'Kortemark' => 'Kortemark',
            'Kortrijk' => 'Kortrijk',
            'Kuurne' => 'Kuurne',
            'Langemark-Poelkapelle' => 'Langemark-Poelkapelle',
            'Lo-Reninge' => 'Lo-Reninge',
            'Middelkerke' => 'Middelkerke',
            'Oostende' => 'Oostende',
            'Oostrozebeke' => 'Oostrozebeke',
            'Poperinge' => 'Poperinge',
            'Roeselare' => 'Roeselare',
            'Ruiselede' => 'Ruiselede',
            'Staden' => 'Staden',
            'Torhout' => 'Torhout',
            'Veurne' => 'Veurne',
            'Vleteren' => 'Vleteren',
            'Waregem' => 'Waregem',
            'Wevelgem' => 'Wevelgem',
            'Wielsbeke' => 'Wielsbeke',
            'Zonnebeke' => 'Zonnebeke',
            'Zwevegem' => 'Zwevegem',
        ],
        'Vlaams-Brabant' => [
            'Aarschot' => 'Aarschot',
            'Bekkevoort' => 'Bekkevoort',
            'Bertem' => 'Bertem',
            'Boortmeerbeek' => 'Boortmeerbeek',
            'Diest' => 'Diest',
            'Galmaarden' => 'Galmaarden',
            'Geetbets' => 'Geetbets',
            'Glabbeek' => 'Glabbeek',
            'Haacht' => 'Haacht',
            'Holsbeek' => 'Holsbeek',
            'Hoegaarden' => 'Hoegaarden',
            'Kortenaken' => 'Kortenaken',
            'Landen' => 'Landen',
            'Leuven' => 'Leuven',
            'Lubbeek' => 'Lubbeek',
            'Tienen' => 'Tienen',
            'Overijse' => 'Overijse',
            'Rotselaar' => 'Rotselaar',
            'Scherpenheuvel-Zichem' => 'Scherpenheuvel-Zichem',
            'Tervuren' => 'Tervuren',
            'Villers-la-Ville' => 'Villers-la-Ville',
            'Zoutleeuw' => 'Zoutleeuw',
        ],
        'Waals-Brabant' => [
            'Braine-l\'Alleud' => 'Braine-l\'Alleud',
            'Braine-le-Château' => 'Braine-le-Château',
            'Chastre' => 'Chastre',
            'Genappe' => 'Genappe',
            'Grez-Doiceau' => 'Grez-Doiceau',
            'Halle' => 'Halle',
            'Lasne' => 'Lasne',
            'Nivelles' => 'Nivelles',
            'Ottignies-Louvain-la-Neuve' => 'Ottignies-Louvain-la-Neuve',
            'Rixensart' => 'Rixensart',
            'Tubize' => 'Tubize',
            'Wavre' => 'Wavre',
        ],
        'Luik' => [
            'Aywaille' => 'Aywaille',
            'Baelen' => 'Baelen',
            'Blegny' => 'Blegny',
            'Braives' => 'Braives',
            'Chaudfontaine' => 'Chaudfontaine',
            'Clavier' => 'Clavier',
            'Dison' => 'Dison',
            'Esneux' => 'Esneux',
            'Fléron' => 'Fléron',
            'Herve' => 'Herve',
            'Juprelle' => 'Juprelle',
            'Liers' => 'Liers',
            'Liège' => 'Liège',
            'Olne' => 'Olne',
            'Saint-Nicolas' => 'Saint-Nicolas',
            'Seraing' => 'Seraing',
            'Soumagne' => 'Soumagne',
            'Verviers' => 'Verviers',
            'Waremme' => 'Waremme',
        ],
        'Luxemburg' => [
            'Arlon' => 'Arlon',
            'Attert' => 'Attert',
            'Bertrix' => 'Bertrix',
            'Bouillon' => 'Bouillon',
            'Chiny' => 'Chiny',
            'Étalle' => 'Étalle',
            'Florenville' => 'Florenville',
            'Gouvy' => 'Gouvy',
            'Habay' => 'Habay',
            'Libramont-Chevigny' => 'Libramont-Chevigny',
            'Libin' => 'Libin',
            'Marche-en-Famenne' => 'Marche-en-Famenne',
            'Meix-devant-Virton' => 'Meix-devant-Virton',
            'Paliseul' => 'Paliseul',
            'Saint-Hubert' => 'Saint-Hubert',
            'Sainte-Ode' => 'Sainte-Ode',
            'Sizanne' => 'Sizanne',
            'Tellin' => 'Tellin',
            'Tenneville' => 'Tenneville',
            'Vaux-sur-Sûre' => 'Vaux-sur-Sûre',
            'Virton' => 'Virton',
            'Wellin' => 'Wellin',
        ],
        'Namen' => [
            'Andenne' => 'Andenne',
            'Anhée' => 'Anhée',
            'Ciney' => 'Ciney',
            'Dinant' => 'Dinant',
            'Eghezée' => 'Eghezée',
            'Hastière' => 'Hastière',
            'Havelange' => 'Havelange',
            'Hamois' => 'Hamois',
            'Houyet' => 'Houyet',
            'Jemeppe-sur-Sambre' => 'Jemeppe-sur-Sambre',
            'La Bruyère' => 'La Bruyère',
            'Mettet' => 'Mettet',
            'Ohey' => 'Ohey',
            'Rochefort' => 'Rochefort',
            'Sambreville' => 'Sambreville',
            'Sombreffe' => 'Sombreffe',
            'Viroinval' => 'Viroinval',
            'Yvoir' => 'Yvoir',
        ],
        'Henegouwen' => [
            'Anderlues' => 'Anderlues',
            'Ath' => 'Ath',
            'Beloeil' => 'Beloeil',
            'Bernissart' => 'Bernissart',
            'Blankenberge' => 'Blankenberge',
            'Boussu' => 'Boussu',
            'Brunehaut' => 'Brunehaut',
            'Colfontaine' => 'Colfontaine',
            'Dour' => 'Dour',
            'Frameries' => 'Frameries',
            'Gerpinnes' => 'Gerpinnes',
            'Hainaut' => 'Hainaut',
            'Hensies' => 'Hensies',
            'Jurbise' => 'Jurbise',
            'La Louvière' => 'La Louvière',
            'Le Roeulx' => 'Le Roeulx',
            'Lessines' => 'Lessines',
            'Leuze-en-Hainaut' => 'Leuze-en-Hainaut',
            'Lobbes' => 'Lobbes',
            'Manage' => 'Manage',
            'Mons' => 'Mons',
            'Morlanwelz' => 'Morlanwelz',
            'Mouscron' => 'Mouscron',
            'Quaregnon' => 'Quaregnon',
            'Quaregnon' => 'Quaregnon',
            'Quiévrain' => 'Quiévrain',
            'Seneffe' => 'Seneffe',
            'Soignies' => 'Soignies',
            'Thuin' => 'Thuin',
            'Tournai' => 'Tournai',
            'Villers-la-Ville' => 'Villers-la-Ville',
            'Walcourt' => 'Walcourt',
            'Wasmes' => 'Wasmes',
            'Wauthier-Braine' => 'Wauthier-Braine',
            'Wervik' => 'Wervik',
            'Zottegem' => 'Zottegem',
        ],
        'Brussels' => [
            'Anderlecht' => 'Anderlecht',
            'Auderghem' => 'Auderghem',
            'Berchem-Sainte-Agathe' => 'Berchem-Sainte-Agathe',
            'Brussels' => 'Brussels',
            'Etterbeek' => 'Etterbeek',
            'Evere' => 'Evere',
            'Forest' => 'Forest',
            'Ganshoren' => 'Ganshoren',
            'Ixelles' => 'Ixelles',
            'Jette' => 'Jette',
            'Koekelberg' => 'Koekelberg',
            'Molenbeek-Saint-Jean' => 'Molenbeek-Saint-Jean',
            'Saint-Gilles' => 'Saint-Gilles',
            'Saint-Josse-ten-Noode' => 'Saint-Josse-ten-Noode',
            'Schaerbeek' => 'Schaerbeek',
            'Uccle' => 'Uccle',
            'Watermael-Boitsfort' => 'Watermael-Boitsfort',
            'Woluwe-Saint-Lambert' => 'Woluwe-Saint-Lambert',
            'Woluwe-Saint-Pierre' => 'Woluwe-Saint-Pierre',
        ],
        default => [],
    })
    ->reactive()
    ->required(),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        // For testing: dump the form data on submit
        dd($this->form->getState());
    }

    public function render(): View
    {
        return view('livewire.create-post');
    }

    private function getMunicipalitiesByProvince(): array
    {
        return [
            'Antwerpen' => ['Antwerpen', 'Boom', 'Mechelen'],
            'Limburg' => ['Hasselt', 'Genk', 'Tongeren'],
            'Oost-Vlaanderen' => ['Gent', 'Aalst', 'Sint-Niklaas'],
            'West-Vlaanderen' => ['Brugge', 'Kortrijk', 'Oostende'],
            'Vlaams-Brabant' => ['Leuven', 'Vilvoorde', 'Tienen'],
            'Waals-Brabant' => ['Wavre', 'Nivelles'],
            'Luik' => ['Liège', 'Verviers', 'Huy'],
            'Luxemburg' => ['Arlon', 'Bastogne', 'Marche-en-Famenne'],
            'Namen' => ['Namur', 'Dinant', 'Ciney'],
            'Henegouwen' => ['Mons', 'Charleroi', 'Tournai'],
            'Brussels' => ['Brussel', 'Etterbeek', 'Schaerbeek'],
        ];
    }
}
