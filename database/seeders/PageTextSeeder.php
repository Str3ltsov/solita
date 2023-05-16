<?php

namespace Database\Seeders;

use App\Enums\PageEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('page_texts')->insert([
            [
                'page_id' => PageEnum::ES_PROJEKTAI,
                'html_text' => htmlentities("
                    <img src=\"images/es_projektai.png\" alt=\"es_projektai\" style=\"width: clamp(250px, 100%, 450px)\">
                    <p>UAB \"Solita\" įgyvendina ES struktūrinėmis lėšomis finansuojamą projektą Nr. 13.1.1-LVPA-K-310-01-0267 \"Programinės įrangos kūrimo užsakymo proceso skaitmenizavimas\". Bendra projekto vertė – <b class=\"text-dark\">90 200,00</b> Eur, iš kurių <b class=\"text-dark\">43 296,00</b> Eur sudaro Europos regioninės plėtros fondo lėšos.</p>
                    <p>Parama projekto įgyvendinimui suteikta pagal 2014–2020 metų Europos Sąjungos fondų investicijų veiksmų programos 13 prioriteto \"Veiksmų, skirtų COVID-19 pandemijos sukeltai krizei įveikti, skatinimas ir pasirengimas aplinką tausojančiam, skaitmeniniam ir tvariam ekonomikos atsigavimui\" priemonę Nr. 13.1.1-LVPA-K-310 \"Paskatos kultūros ir kūrybinių industrijų sektoriui kurti konkurencingus kultūros produktus\". Projektas yra finansuojamas Europos regioninės plėtros fondo lėšomis. Finansuojama kaip Europos Sąjungos atsako į COVID-19 pandemiją priemonė.</p>
                    <p>Projekto tikslas – kurti naujus, aukštos pridėtinės vertės, konkurencingus kultūros ir kūrybinio turinio ir formos produktus, investuojant į naują konkurencingo skaitmeninio kultūros ir kūrybinio turinio ir formos produktą. Įmonė siekia skaitmenizuoti informacinių technologijų užsakymo paslaugas, t. y. perkelti paslaugas iš fizinės aplinkos į skaitmeninę platformą, kuri būtų patogi ir prieinama naudotojui interneto aplinkoje.</p>
                    <p>Įgyvendinus projektą bus sukurta skaitmeninė platforma informacinių technologijų (toliau – IT) paslaugų užsakymo proceso valdymui ir įdiegimui įmonės infrastruktūroje. Įmonės IT paslaugų proceso teikimo skaitmenizavimas padidins IT paslaugų prieinamumą klientui bei atvers prieigą prie paslaugų atlikimo kontrolės. Platforma palengvins IT paslaugų užsakymą klientams, įneš daugiau aiškumo ir skaidrumo bei leis klientams ir programuotojams racionaliai planuoti savo laiką. Skaitmeninė platforma supaprastins paslaugos užsakymo būdą, suteiks tiesioginę prieigą prie specialistų komandos bei galimybę stebėti IT paslaugų atlikimo eigą, įvertinti suteiktą paslaugą, o paslaugos tiekėjui realiu laiku ir operatyviai reaguoti į klientų užklausas. Šis skaitmeninis sprendimas padės įmonei sklandžiai valdyti procesus, operatyviai aptarnauti klientus, taupyti resursus, priimti daugiau užsakymų ir padidinti pajamas.</p>
                    <p>Projekto įgyvendinimo laikotarpis 2022 m. liepos – 2023 m. kovo mėn.</p>
                    <hr>
                    <img src=\"images/es_projektai.png\" alt=\"es_projektai\" style=\"width: clamp(250px, 100%, 450px)\">
                    <p>UAB \"Solita\", kartu su įmone UAB \"Finance Engineering\" įgyvendina ES struktūrinėmis lėšomis finansuojamą projektą Nr. J05-LVPA-K-04-0060 \"Skambučių atpažinimo ir analizės sistemos sukūrimas\". Bendra projekto vertė – <b class=\"text-dark\">449 289,70</b> Eur, iš kurių <b class=\"text-dark\">337 997,40</b> Eur sudaro Europos Regioninės plėtros fondo lėšos.</p>
                    <p>Parama projekto įgyvendinimui suteikta pagal 2014–2020 metų Europos Sąjungos fondų investicijų veiksmų programos 1 prioriteto \"Mokslinių tyrimų, eksperimentinės plėtros ir inovacijų skatinimas\" NR. J05-LVPA-K priemonę \"Intelektas. Bendri mokslo–verslo projektai\".</p>
                    <p>Projekto pareiškėjas, UAB \"Solita\" start-up  tipo įmonė ir veiklą vysto nuo 2018 metų pradžios. Pagrindinė įmonės veikla – IT sprendimų vystymas ir pardavimas.</p>
                    <p>Šiuo projektu UAB \"Solita\" ir partneris UAB \"Finance Engineering\" siekia sukurti naują sistemą – Skambučių atpažinimo ir analizės sistemą CTAS (Calls Transcription and Analysis System). Skambučių atpažinimo ir analizės sistema (CTAS) skirta atpažinti telefoninius pokalbius bei juos interpretuoti, pateikiant galutiniam vartotojui skambučių klasifikaciją pagal temas ar darbuotojų įtaką kliento pasitenkinimui. Pagrindinė sistemos idėja – apjungti tris sąlyginai naujas, bet sparčiai besivystančias technologijas – garso atpažinimo (spech to text), teksto analizės ir klasifikavimo (text mining) ir reitingavimo (text ranking) - į vieną sistemą. Sistemos inovatyvumas ir unikalumas – balso atpažinimas telefoninių pokalbių metu, kalbų identifikavimas, teksto analizė ir informacijos įvertinimas. Sistema bus pagrįsta balso atpažinimo ir garsinės informacijos semantizavimo technologijomis, sudėtingais matematiniais algoritmais, dirbtinio intelekto metodais, teksto klasterizavimo ir klasifikavimo metodais. Pasaulio rinkose nėra telefoninių skambučių atpažinimo ir analizės sistemų, turinčių tokį aukštą technologinį lygį ir funkcionalumą.</p>
                    <p>CTAS (Skambučių atpažinimo ir analizės sistema) pagrindu bus sukurti ir rinkai pateikti trys produktai: CTAS Insurance - draudimo paslaugos teikiančioms įmonėms; CTAS Construction – statybų, apdailos paslaugos teikiančioms įmonėms ir CTAS API – garso atpažinimo funkcijų integravimo į trečių šalių produktus, naudojant API (angl. Application Programming Interface, API) sąsajų rinkinį. CTAS Insurance ir CTAS Construction skirti gauti, apdoroti ir perteikti teisingą telefoninių pokalbių informaciją draudimo ar statybos rinkos dalyviams, atlikti objektyvų veiklos, paslaugų kokybės ir vartotojų pasitenkinimo įvertinimą ir pateikti išvadas. CTAS API skirtas telefoninių pokalbių automatizavimui, orientuojamas į telefonijos įmones, bet be papildomų funkcijų gali būti naudojamas ir kitų sektorių įmonių. Projekto tiksliniai pirkėjai – draudimo, telefonijos, statybos paslaugų kompanijos, siekiančios gerinti paslaugų kokybę ir didinti veiklos efektyvumą.</p>
                    <p>Projektas yra įgyvendinamas su partneriu UAB \"Finance Engineering\". UAB \"Finance Engineering\" darbuotojai yra aukštos kvalifikacijos kompiuterių programuotojai, kompiuterių sistemų analitikai bei draudimo aktuarai ir matematikai, patyrę dirbtinio intelekto (artificial inteligence) ir didelių duomenų (big data), reitingavimo sistemų kūrime ir diegime. Partnerio darbuotojai dalyvaus daugumoje projekto veiklų.</p>
                    <p>Skambučių atpažinimo ir analizės sistemos poreikį rinkoje sąlygoja spartus draudimo ir statybos sektorių augimas, draudimo paslaugų skaitmenizavimas, garsinės informacijos semantizavimo technologijų poreikis telefoninių paslaugų rinkoje.</p>
                    <p>Projekto metu atliktos MTEP veiklos ir jų metų gauti rezultatai, bei sukurtas produktas bus komercializuojamas Lietuvos, o vėliau užsienio rinkose. Planuojami pardavimai šiose rinkose leis padidinti įmonės apyvartą ir skatins investuoti bei tęsti MTEP veiklas, siekiant sukurti naujas technologijas bei produktus. Projekto metu sukurta sistema yra aktuali rinkai, nes šiuo metu pasaulio rinkose nėra telefoninių skambučių atpažinimo ir analizės sistemų, turinčių tokį aukštą technologinį lygį ir funkcionalumą. Projekto naudą pajus visi draudimo, statybų, telefonijos sektoriaus dalyviai, siekiantys gerinti paslaugų kokybę ir didinti veiklos efektyvumą.</p>
                    <p>Projekto veiklas numatyta užbaigti  2021 m. vasario 17 d.</p>
                ", ENT_QUOTES)
            ],
            [
                'page_id' => PageEnum::PASLAUGOS,
                'html_text' => htmlentities("
                    <span>Įmonės veiklos sritys:</span>
                    <ul>
                        <li>atlieka mokslinės, eksperimentinės ir technologinės plėtros tyrimus;</li>
                        <li>atlieka duomenų analizės ir apdorojimo darbus;</li>
                        <li>vykdo sistemų architektūros kūrimo ir projektavimo darbus;</li>
                        <li>analizuoja sistemų veikimą, atlieka vertinimo ir analizės metodų  parinkimą;</li>
                        <li>vykdo programavimo, duomenų analizės, atpažinimo algoritmų kūrimo, jų testavimo ir kalibravimo darbus;</li>
                        <li>vysto šnekos atpažinimo ir analizės sprendimus;</li>
                        <li>kuria ir diegia turinio, klientų, verslo valdymo sistemas, konsultuoja, apmoko dirbti su sistemomis.</li>
                    </ul>
                ", ENT_QUOTES)
            ],
            [
                'page_id' => PageEnum::KONTAKTAI,
                'html_text' => htmlentities("
                    <span>UAB \"Solita\"</span>
                    <span>Įmonės kodas 304764201</span>
                    <span>PVM mokėtojo kodas LT100011832719</span>
                    <span>Adresas: Taikos pr. 88a, 51182 Kaunas</span>
                    <span>El. paštas: <a href=\"mailto:info@solita.lt\">info@solita.lt</a></span>
                    <span>Tel.: +370 372 47749</span>
                ", ENT_QUOTES)
            ]
        ]);
    }
}