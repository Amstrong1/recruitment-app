<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recrutement</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>

</head>

<body>
    <header>
        <div class="h-screen bg-neutral-50 py-24 px-6 text-center dark:bg-neutral-900">
            <h1 class="mt-2 mb-16 text-2xl font-bold tracking-tight md:text-3xl xl:text-5xl">
                OPPORTUNITE DE CARRIERE <br /><br />
                <span class="text-primary text-xl md:text-2xl xl:text-3xl">
                    Devenez commercial(e) en solutions
                    numériques <br class="hidden md:block"> chez VIBECRO CORPORATION</span>
            </h1>

            <p id="" class="text-xl m-2">Cette offre expire dans</p>
            <p id="demo" class="font-semibold text-2xl mb-8"></p>


            <a class="mb-2 inline-block rounded bg-primary px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] md:mr-2 md:mb-0"
                data-te-ripple-init data-te-ripple-color="light" href="#detail" role="button">Voir Plus</a>
        </div>
    </header>

    <main>
        <section id="detail" class="p-10 md:p-20">
            <div class="flex flex-row-reverse items-center justify-center">
                <div class="md:w-1/2 p-4">
                    <img src="{{ asset('img/apply.svg') }}" alt="worker">
                </div>
                <div class="md:w-1/2 md:px-10">
                    <div class="mb-4 text-lg">
                        <a class="text-primary" href="https://vibecro-corp.tech">Vibecro</a>, une entreprise de premier
                        plan spécialisée dans les services
                        numériques, le développement d'applications web et mobile, ainsi que
                        l'accompagnement des entreprises dans leur processus de digitalisation, est
                        à la recherche de talents pour renforcer son équipe commerciale.
                    </div>
                    <h2 class="text-2xl font-bold mb-2">Détails de l'offre</h2>
                    <ul class="list-disc ms-8 mb-4">
                        <li>
                            Nombre de postes à pourvoir : 12
                        </li>
                        <li>
                            Type de contrat : CDD
                        </li>
                        <li>
                            Lieu du travail : Sur toute l'étendue du territoire nationale
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold mb-2">Mission de l'offre</h2>
                    <ul class="list-disc ms-8 mb-4">
                        <li>
                            Mener des actions de prospection commerciale.
                        </li>
                        <li>Convertir les prospects en clients par le biais d'appels téléphoniques, de
                            rencontres en personne, et de la gestion des canaux de communication en
                            ligne.
                        </li>
                        <li>Proposer nos services additionnels aux clients.</li>
                        <li>Collaborer étroitement avec les différentes équipes internes pour
                            intégrer les améliorations produites dans vos argumentaires commerciaux.</li>
                        <li>Recueillir les retours clients sur nos solutions et les transmettre aux
                            équipes concernées.</li>
                        <li>Produire des rapports réguliers sur l'avancement des missions et des
                            projets au quotidien.
                        </li>
                    </ul>

                    <h2 class="text-2xl font-bold mb-2">Avantages</h2>
                    <ul class="list-disc ms-8 mb-4">
                        <li>
                            Package salarial attractif avec des commissions sur les ventes.
                        </li>
                        <li>Formation continue et opportunités d'avancement professionnel.</li>
                        <li>Proposer nos services additionnels aux clients.</li>
                        <li>Environnement de travail dynamique au sein d'une entreprise en pleine
                            croissance.</li>
                    </ul>

                    <div class="my-2 font-bold text-red-500">
                        <span class="underline">NB :</span> &nbsp;
                        <span>Disposez d'un moyen de déplacement serait un atout.</span>
                    </div>

                    <div class="font-bold my-2">
                        Pour plus d'informations : <a class="underline" href="tel:+22955695656">+229 55 69 56 56</a> /
                        <a class="underline" href="tel:+22945337181"> +229 45 33 71 81</a>
                    </div>

                    <div class="font-bold my-2">
                        Date d'expiration : 20 mars 2024
                    </div>

                    <a class="mb-2 inline-block rounded bg-primary px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] md:mr-2 md:mb-0"
                        data-te-ripple-init data-te-ripple-color="light" href="#postuler" role="button">Postuler</a>
                </div>
            </div>
        </section>

        <section id="postuler" class="bg-neutral-50 p-10 md:p-20">
            <div class="min-h-screen md:mb-10">
                <h2 class="text-2xl font-bold mb-4 text-center">Soumettez votre candidature</h2>
                <form action="{{ route('apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="md:grid md:grid-cols-2 gap-4 mb-6">
                        <!--First name input-->
                        <div class="relative mb-2">
                            <label for="name"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Nom
                            </label>
                            <input type="text" id="name" name="name" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                        </div>

                        <!--Last name input-->
                        <div class="relative mb-2">
                            <label for="first_name"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Prénoms
                            </label>
                            <input type="text" id="first_name" name="first_name" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                        </div>

                        <!--Last name input-->
                        <div class="relative mb-2">
                            <label for="birthday"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Date
                                de naissance
                            </label>
                            <input type="date" id="birthday" name="birthday" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
                        </div>

                        <!--Last name input-->
                        <div class="relative mb-2">
                            <label for="sex"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Sexe
                            </label>
                            <select name="sex" id="sex" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
                                <option value=""></option>
                                <option value="F">Feminin</option>
                                <option value="M">Masculin</option>
                            </select>
                            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="email"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Email
                            </label>
                            <input type="email" id="email" name="email" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="tel"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Tél
                            </label>
                            <input type="tel" id="tel" name="tel" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="city"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Ville
                            </label>
                            <input type="text" id="city" name="city" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="address"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Adresse
                            </label>
                            <input type="text" id="address" name="address" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="diploma"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Diplome
                                obtenu
                            </label>
                            <input type="text" id="diploma" name="diploma" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('diploma')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="experience"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Année
                                d'expérience
                            </label>
                            <input type="number" id="experience" name="experience" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="resume"
                                class="pointer-events-none mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">CV
                            </label>
                            <input type="file" id="resume" name="resume" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('resume')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="cid"
                                class="pointer-events-none max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Piece
                                d'identité
                            </label>
                            <input type="file" id="cid" name="cid" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('cid')" class="mt-2" />
                        </div>

                        <div class="relative mb-2">
                            <label for="avatar"
                                class="pointer-events-none max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Photo
                                d'identité
                            </label>
                            <input type="file" id="avatar" name="avatar" required
                                class="peer block min-h-[auto] w-full rounded border bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" />
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                        </div>

                        <div class="mt-8 pb-10 md:pb-6 col-span-2">
                            <button type="submit"
                                class="w-full md:w-1/2 rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                                data-te-ripple-init data-te-ripple-color="light">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="w-full bg-neutral-200 text-center dark:bg-neutral-700 lg:text-left">
        <div class="p-4 text-center text-neutral-700 dark:text-neutral-200">
            © 2024 Copyright
        </div>
    </footer>

    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Mar 20, 2024 18:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + " jours - " + hours + "h " +
                minutes + "m " + seconds + "s";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "OFFRE EXPIRE";
            }
        }, 1000);
    </script>
</body>

</html>
