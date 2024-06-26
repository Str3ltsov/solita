@extends('layout.app')

@section('content')
    <main>
        <section class="about__area pt-120 pb-60" id="pirmas">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset('images/BFES.jpg') }}" alt="{{ __('BFES') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// {{ $page->name }}</span>
                                <h2>{{ __('pages.firstProject') }}</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    @if (app()->getLocale() == 'lt')
                                        <p>
                                            UAB „Solita“, įgyvendina projektą „UAB „Solita“ eksporto rinkų plėtra
                                            dalyvaujant
                                            parodose“ Nr. 02-036-K-0041. Bendra projekto vertė – <b>193 422,00 Eur</b>, iš
                                            kurių
                                            <b>96 711,00 Eur</b> sudaro Europos Sąjungos fondų lėšos.
                                        </p>
                                        <p>
                                            Projektas įgyvendinamas pagal Sutartyje, plėtros programos pažangos priemonės
                                            Nr.
                                            05-001-01-11-04 „Įgyvendinti eksporto konkurencingumo augimą skatinančias
                                            priemones“
                                            veiklos „MVĮ veiklos tarptautiškumo ir naujų eksporto rinkų identifikavimo
                                            veiklų
                                            skatinimas (Vidurio ir vakarų Lietuvos regionas)“ apraše, patvirtintame Lietuvos
                                            Respublikos ekonomikos ir inovacijų ministro 2023 m. rugpjūčio 9 d. įsakymu Nr.
                                            4-438 „Dėl Ekonomikos ir inovacijų ministro 2022 m. rugpjūčio 2 d. įsakymo Nr.
                                            4-895
                                            „Dėl 2022-2023 metų plėtros programos valdytojos Lietuvos Respublikos ekonomikos
                                            ir
                                            inovacijų ministerijos Ekonomikos transformacijos ir konkurencingumo plėtros
                                            programos pažangos priemonės Nr. 05-001-01-11-04 aprašo patvirtinimo“ (su
                                            vėliausiais pakeitimais), Projektų administravimo ir finansavimo taisyklėse,
                                            patvirtintose Lietuvos Respublikos finansų ministro 2022 m. birželio 22 d.
                                            įsakymu
                                            Nr. 1K-237 „Dėl 2021–2027 metų Europos Sąjungos fondų investicijų programos ir
                                            Ekonomikos gaivinimo ir atsparumo didinimo plano „Naujos kartos Lietuva“
                                            įgyvendinimo“, ir juose nurodytuose ES ir Lietuvos Respublikos teisės aktuose
                                            nustatytas sąlygas ir tvarką.
                                        </p>
                                        <p>
                                            Projekto veiklos nukreiptos UAB „Solita“ produkcijos eksporto skatinimui, naujų
                                            eksporto rinkų paieškai ir jau esamų rinkų plėtrai, įmonės konkurencingumo
                                            didinimui. Investicijas planuojama skirti MVĮ ir jos produkcijos pristatymui
                                            užsienyje vykstančiose tarptautinėse parodose.
                                        </p>
                                        <p>
                                            UAB „Solita“ dirba informacinių technologijų rinkoje ir veikia IT sistemų ir
                                            internetinių svetainių kūrimo, priežiūros ir palaikymo srityje
                                        </p>
                                        <p>
                                            Kadangi įmonė yra užėmusi nemažą Lietuvos rinkos dalį, yra bandoma didinti
                                            įmonės
                                            apyvartą ieškant užsienio rinkų, pirmieji žingsniai jau yra padaryti, įmonė yra
                                            pradėjusi eksporto veiklas, tačiau norint didesniu mastu išplėsti eksportą,
                                            reikalinga išsamiai pristatyti savo produkciją parodose, o tam reikalingos
                                            nemažos
                                            investicijos. Įmonė neturi galimybių projekto įgyvendinti nuosavomis lėšomis,
                                            todėl
                                            reikalingas išorinis paramos šaltinis, nes yra neišnaudojama galimybė vykdyti
                                            eksporto plėtrą. Projekto tikslas – užtikrinti naujų eksporto rinkų atsiradimą,
                                            taip
                                            prisidedant prie įmonės rinkų bei rizikų diversifikacijos, apyvartos, eksporto,
                                            konkurencingumo didėjimo bei bendro Lietuvos eksporto apimčių augimo.
                                        </p>
                                        <p>
                                            Planuojama, kad dalyvavimas tarptautinėse su įmonės paslaugomis susijusiose
                                            parodose
                                            padės susirasti potencialių užsakovų bei partnerių užsienio šalyse, kurie
                                            įvertins
                                            UAB „Solita“ paslaugų kokybę, turimą ilgametę patirtį. Šiuo metu įmonė savo
                                            paslaugas jau eksportuoja, tačiau siekia geriau išnaudoti turimą potencialą,
                                            todėl
                                            ketina išplėsti eksportą dalyvaudama parodose. Susidomėjimas iš užsienio šalių
                                            jau
                                            pastebimas. Parodos pasirinktos atsižvelgianti į tai, kad tai aukštą
                                            technologijų
                                            išsivystymo lygį bei didžiulį vystymosi potencialą įmonės veikiamame sektoriuje
                                            turinčios šalys. Laiku užmezgus reikiamus kontaktus šiose rinkose galima tikėtis
                                            užsiimti ženklią rinkos dalį.
                                        </p>

                                        <p>
                                            Projekto įgyvendinimo laikotarpis 2024 m. birželio 4 d. – 2026 m. spalio mėn. 31
                                            d.
                                        </p>

                                        <p>
                                            Su projektu susijusios užklausos gali būti adresuojamos <a
                                                href="mailto:info@solita.lt" class="link-primary">info@solita.lt</a>
                                        </p>
                                    @else
                                        <p>
                                            UAB "Solita" implements the project "Development of UAB "Solita" export markets
                                            through participation in exhibitions" no. 02-036-K-0041. The total value of the
                                            project is <b>193 422.00 EUR</b>, of which <b>96 711.00 EUR</b> are European
                                            Union funds.
                                        </p>
                                        <p>
                                            The project is implemented in accordance with the Agreement, development program
                                            progress measure no. 05-001-01-11-04 "Implementing measures promoting the growth
                                            of export competitiveness" in the description of the activity "Promoting the
                                            internationalization of SME activities and identification of new export markets
                                            (Central and Western Lithuania region)", approved by the Minister of Economy and
                                            Innovation of the Republic of Lithuania in 2023. August 9 by order no. 4-438 "On
                                            the Decree of the Minister of Economy and Innovation in 2022 August 2 order no.
                                            4-895 "Regarding the 2022-2023 development program manager of the Ministry of
                                            Economy and Innovation of the Republic of Lithuania, Economic Transformation and
                                            Competitiveness Development Program Progress Measure No. 05-001-01-11-04
                                            description approval" (with the latest amendments), in the project
                                            administration and financing rules, approved by the Minister of Finance of the
                                            Republic of Lithuania in 2022. June 22 by order no. 1K-237 "On the
                                            implementation of the 2021-2027 European Union Funds Investment Program and the
                                            Economic Revitalization and Resilience Enhancement Plan "New Generation
                                            Lithuania", and the conditions and procedures set forth in the legal acts of the
                                            EU and the Republic of Lithuania referred to in them.
                                        </p>
                                        <p>
                                            The activities of the project are aimed at promoting the export of UAB "Solita"
                                            products, searching for new export markets and developing existing markets,
                                            increasing the company's competitiveness. Investments are planned for the
                                            presentation of SMEs and their products at international exhibitions held
                                            abroad.
                                        </p>
                                        <p>
                                            UAB "Solita" works in the information technology market and operates in the
                                            field of development, maintenance and support of IT systems and websites.
                                        </p>
                                        <p>
                                            Since the company has occupied a considerable share of the Lithuanian market, it
                                            is trying to increase the company's turnover by looking for foreign markets, the
                                            first steps have already been taken, the company has started export activities,
                                            but in order to expand exports on a larger scale, it is necessary to present its
                                            products in detail at exhibitions, and this requires significant investments.
                                            The company does not have the ability to implement the project with its own
                                            funds, so an external source of support is needed, as there is an untapped
                                            opportunity to carry out export development. The goal of the project is to
                                            ensure the emergence of new export markets, thereby contributing to the
                                            diversification of the company's markets and risks, increase in turnover,
                                            export, competitiveness and overall growth of Lithuanian export volumes.
                                        </p>
                                        <p>
                                            It is planned that participation in international exhibitions related to the
                                            company's services will help to find potential customers and partners in foreign
                                            countries who will appreciate the quality of UAB "Solita" services and the
                                            long-term experience. Currently, the company already exports its services, but
                                            it seeks to better utilize its potential, and therefore intends to expand
                                            exports by participating in exhibitions. Interest from foreign countries is
                                            already noticeable. The exhibitions were chosen taking into account the fact
                                            that these are countries with a high level of technological development and huge
                                            development potential in the sector operated by the company. By establishing the
                                            necessary contacts in these markets in time, one can expect to occupy a
                                            significant market share.
                                        </p>

                                        <p>
                                            The project implementation period is 2024. June 4 - in 2026 October month. on
                                            the 31st
                                        </p>

                                        <p>
                                            Inquiries related to the project can be addressed to <a
                                                href="mailto:info@solita.lt" class="link-primary">info@solita.lt</a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__area pt-120 pb-60" id="antras">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// {{ $page->name }}</span>
                                <h2>{{ __('pages.secondProject') }}</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    @if (app()->getLocale() == 'lt')
                                        <p>UAB „Solita“ įgyvendina projektą <b>„MetaEndo diagnostikos sistemos
                                                sukūrimas“</b>
                                            Nr.
                                            02-020-K-0022. Bendra projekto vertė – <b>625 756,72 Eur</b>, iš kurių
                                            <b>420 025,97
                                                Eur</b> sudaro
                                            Europos regioninės plėtros fondo lėšos.
                                        </p>
                                        <p>Projektas įgyvendinamas pagal Sutartyje, plėtros programos pažangos priemonės Nr.
                                            05-001-01-05-07 „Sukurti nuoseklią inovacinės veiklos skatinimo sistemą“ veiklos
                                            „Skatinti inovacijų pasiūlą“ poveiklės „Investuoti į naujų APV produktų kūrimo
                                            veiklas
                                            ir sudaryti sąlygas tyrėjams dalyvauti įmonių MTEP veiklose, skatinti
                                            intelektinę
                                            nuosavybę, ankstyvąją sukurtų naujų produktų bandomąją gamybą, parengimą rinkai“
                                            (Vidurio ir vakarų Lietuvos regionas) projektų finansavimo sąlygų apraše,
                                            patvirtintame
                                            Lietuvos Respublikos ekonomikos ir inovacijų ministro 2023 m. liepos 7 d.
                                            įsakymu
                                            Nr.
                                            4-368, Projektų administravimo ir finansavimo taisyklėse, patvirtintose Lietuvos
                                            Respublikos finansų ministro 2022 m. birželio 22 d. įsakymu Nr. 1K-237 „Dėl
                                            2021–2027
                                            metų Europos Sąjungos fondų investicijų programos ir Ekonomikos gaivinimo ir
                                            atsparumo
                                            didinimo plano „Naujos kartos Lietuva“ įgyvendinimo“, ir juose nurodytuose ES ir
                                            Lietuvos Respublikos teisės aktuose nustatytas sąlygas ir tvarką.</p>
                                        <p>Pasaulio sveikatos organizacijos duomenimis, su nevaisingumo problema pasaulyje
                                            susiduria maždaug kas šešta pora arba apie 180 milijonų pasaulio gyventojų.
                                            Pagalbinis
                                            apvaisinimas, kurio metu iš žmogaus lytinių ląstelių laboratorijoje sukurti
                                            besivystantys embrionai įkeliami į moters gimdą, neretai yra vienintelis būdas
                                            vaisingumo sutrikimų turinčioms poroms tapti tėvais. Pasaulyje per metus
                                            atliekama
                                            daugiau kaip 1,5 milijono pagalbinio apvaisinimo gydymo ciklų, po kurių kasmet
                                            gimsta
                                            daugiau nei 350 tūkst. naujagimių, tačiau kūdikio po pagalbinio apvaisinimo
                                            susilaukia
                                            mažiau nei trečdalis porų. Procedūros sėkmė priklauso nuo daugelio priežasčių:
                                            lytinių
                                            ląstelių – kiaušialąsčių ir spermatozoidų – kokybės, kurią dažnai lemia poros
                                            amžius,
                                            ankstyvos stadijos embrionų ir blastocistų gyvybingumo, genominių embriono
                                            mutacijų,
                                            gimdos gleivinės receptyvumo ir kitų aplinkybių. Rinkai reikalinga kompleksinio
                                            vertinimo sistema, apjungianti visų galimų tyrimų rezultatus ir gebanti
                                            padidinti
                                            IVF
                                            efektyvumą. Tokį skaitmeninį sprendimą, pagrįstą medicinos žiniomis ir dirbtinio
                                            intelekto technologijomis planuoja sukurti aukštųjų technologijų bendrovės,
                                            bendradarbiaudamos su Lietuvos sveikatos mokslų universitetu.</p>
                                        <p>Projekto pareiškėjas, UAB „Solita“ – informacinių technologijų bendrovė, nuo 2018
                                            m.
                                            kurianti skaitmeninius sprendimus visų dydžių ir pramonės sektorių klientams,
                                            atliekanti
                                            mokslinės, eksperimentinės ir technologinės plėtros tyrimus, kurianti
                                            inovatyvius
                                        </p>
                                    @else
                                        <p>Solita UAB implements the project <b>"Creation of the MetaEndo diagnostic
                                                system"</b>
                                            no. 02-020-K-0022. The total value of the project is <b>625 756.72 EUR</b>, of
                                            which
                                            <b>420 025.97 EUR</b> is the European Regional Development Fund.
                                        </p>
                                        <p>The project is implemented in accordance with the Agreement, development program
                                            progress measure no. 05-001-01-05-07 "Create a coherent system for the promotion
                                            of innovative activities" the effects of the activity "Promote the supply of
                                            innovations" "Invest in the development of new APV products and provide
                                            opportunities for researchers to participate in the R&D activities of companies,
                                            promote intellectual property, early testing of new products created production,
                                            preparation for the market" (Central and Western Lithuania region) in the
                                            description of project financing conditions, approved by the Minister of Economy
                                            and Innovation of the Republic of Lithuania in 2023. July 7 by order no. 4-368,
                                            in the project administration and financing rules, approved by the Minister of
                                            Finance of the Republic of Lithuania in 2022. June 22 by order no. 1K-237 "On
                                            the implementation of the 2021-2027 European Union Funds Investment Program and
                                            the Economic Revitalization and Resilience Enhancement Plan "New Generation
                                            Lithuania", and the conditions and procedures set forth in the legal acts of the
                                            EU and the Republic of Lithuania referred to in them.</p>
                                        <p>According to the World Health Organization, about one in six couples or about 180
                                            million people in the world face the problem of infertility. Assisted
                                            fertilization, in which developing embryos created in a laboratory from human
                                            gametes are placed in a woman's uterus, is often the only way couples with
                                            fertility problems can become parents. In the world, more than 1.5 million
                                            cycles of assisted reproduction treatment are performed per year, after which
                                            more than 350 thousand are born every year. newborns, but less than a third of
                                            couples have a baby after assisted fertilization. The success of the procedure
                                            depends on many reasons: the quality of the germ cells - eggs and sperm - which
                                            is often determined by the age of the couple, the viability of early-stage
                                            embryos and blastocysts, genomic mutations of the embryo, the receptivity of the
                                            uterine lining and other circumstances. The market needs a complex assessment
                                            system that combines the results of all possible studies and is able to increase
                                            the efficiency of IVF. Such a digital solution, based on medical knowledge and
                                            artificial intelligence technologies, is planned to be created by high-tech
                                            companies in cooperation with the Lithuanian University of Health Sciences.</p>
                                        <p>The applicant of the project, UAB "Solita" - an information technology company,
                                            since 2018. developing digital solutions for clients of all sizes and industry
                                            sectors, conducting scientific, experimental and technological development
                                            research, creating innovative
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset('images/BFES.jpg') }}" alt="{{ __('BFES') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about__area pt-120 pb-60" id="trecias">
            <div class="container">
                <div class="row align-items-start wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="col-xl-5 col-lg-4">
                        <div class="about__left-one p-relative mb-60">
                            <div class="about__left-thumb">
                                <img src="{{ asset($page->image) }}" alt="{{ $page->name }}">
                            </div>
                            @if ($page->show_experience)
                                <div class="about__experience-shape">
                                    <div class="about__experience-content">
                                        <h2>{{ $page->experience_years }}</h2>
                                        <span>{{ __('pages.experienceYears') }}</span>
                                        <div class="about__experience-shape-icon">
                                            <i class="fal fa-trophy-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="about__right-content mb-60">
                            <div class="section__title-one mb-35">
                                <span>// {{ $page->name }}</span>
                                <h2>{{ $page->title }}</h2>
                            </div>
                            <div class="about__description-text">
                                <div class="bd-ud-app-check-list mb-25">
                                    {!! $page->text !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        const h4 = document.querySelector('.about__description-text').querySelector('h4')

        h4 && h4.classList.add('pb-10')
    </script>
@endpush
