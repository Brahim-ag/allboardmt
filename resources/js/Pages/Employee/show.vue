<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Informations d'employé : {{ employe.name }}
                {{ employe.lastname }} | {{ employe.lastnameAr }}
                {{ employe.nameAr }}
            </h2>
        </template>
        <div class="container mx-auto gap-3">
            <div class="card card-white grid-margin">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/spouses/{{ employe.id }}/employee"
                        >
                            Conjoints
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="/childs/{{ employe.id }}/employee"
                            title="enfants"
                            class="nav-link"
                        >
                            enfants
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="/antecedents/{{ employe.id }}/employee"
                            title="antecedent"
                            class="nav-link"
                        >
                            antécédents
                        </a>
                    </li>
                    --}}

                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >INFORMATIONS PERSONNELLES</a
                        >
                        <div class="dropdown-menu">
                            <inertia-link :href="`/formation/${employe.id}`"
                                > FORMATIONS EXTERNES</inertia-link
                            >
                           
                               
                          
                            <a
                                href="/languages/{{ employe.id }}/employee"
                                class="dropdown-item"
                            >
                                LANGUAGES
                            </a>

       
                             <inertia-link :href="`/antecejudi/${employe.id}`"
                                > ANTÉCÉDENTS JUDICIAIRES</inertia-link
                            >
                            <!-- <a
                                href="/profiles/{{ employe.id }}/employee"
                                class="dropdown-item"
                            >
                                PARCOURS SCOLAIRE
                                {{-- @if ($employee.sexe == 'Masculin')
                                    Service National
                                @endif -- -.
                            </a>
                            @if ($employee.situation != 'Celibataire')
                            <a
                                href="/spouses/{{ employe.id }}/employee"
                                class="dropdown-item"
                            >
                                CONJOINTS
                            </a> -->

                            <a
                                href="/childs/{{ employe.id }}/employee"
                                class="dropdown-item"
                            >
                                ENFANTS
                            </a>
                            @endif
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <inertia-link :href="`/parcour/${employe.id}`"
                                >Parcours Scolaire</inertia-link
                            >
                        
                        <div class="dropdown-menu">
                            <a
                                href="/stages/{{ employe.id }}/employee"
                                title="Conjoin"
                                class="nav-link"
                            >
                                STAGES
                            </a>
                            <a
                                href="/recrutements/{{ employe.id }}/employee"
                                title="antecedent"
                                class="nav-link"
                            >
                                RECRUTEMENT
                            </a>

                            <a
                                href="/echelons/{{ employe.id }}/employee"
                                title="echelons"
                                class="nav-link"
                            >
                                ECHELONS
                            </a>
                            <a
                                href="/grades/{{ employe.id }}/employee"
                                title="antecedent"
                                class="nav-link"
                            >
                                GRADES
                            </a>
                            <a
                                href="/evaluations/{{ employe.id }}/employee"
                                title="evaluation"
                                class="nav-link"
                            >
                                EVALUATIONS
                            </a>
                            <a
                                href="/cessations/{{ employe.id }}/employee"
                                title="primes"
                                class="nav-link"
                            >
                                CESSATION
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            data-toggle="dropdown"
                            href="#"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >POSITION STATUTAIRE</a
                        >
                        <div class="dropdown-menu">
                            <a
                                href="/detachements/{{ employe.id }}/employee"
                                title="detachements"
                                class="dropdown-item"
                            >
                                DETACHEMENTS
                            </a>
                            <a
                                href="/mutations/{{ employe.id }}/employee"
                                title="mutations"
                                class="dropdown-item"
                            >
                                MUTATIONS
                            </a>
                            <a
                                href="/dispos/{{ employe.id }}/employee"
                                title="antecedent"
                                class="dropdown-item"
                            >
                                MISE EN DISPONIBILITÉ
                            </a>
                            <a
                                href="/horscadres/{{ employe.id }}/employee"
                                title="antecedent"
                                class="dropdown-item"
                            >
                                HORS-CADRE
                            </a>
                            <!-- @if ($employee.sexe == 'Masculin')
                            <a
                                href="/military/{{ employe.id }}/employee"
                                title="antecedent"
                                class="dropdown-item"
                            >
                                SERVICE NATIONAL
                            </a>
                            @endif -->
                        </div>
                    </li>

                    <li class="nav-item">
                        <a
                            href="/fonctions/{{ employe.id }}/employee"
                            title="fonctions"
                            class="nav-link"
                        >
                            fonctions
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="/postesups/{{ employe.id }}/employee"
                            title="fonctions"
                            class="nav-link"
                        >
                            POSTES SUPERIEURS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="/fonctionsups/{{ employe.id }}/employee"
                            title="primes"
                            class="nav-link"
                        >
                            FONCTIONS SUPERIEURS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="/regimdis/{{ employe.id }}/employee"
                            title="primes"
                            class="nav-link"
                        >
                            REGIME DISCIPLINAIRE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a
                            href="/conges/{{ employe.id }}/employee"
                            title="primes"
                            class="nav-link"
                        >
                            CONGES ET ABSCENCES
                        </a>
                    </li>
                </ul>

                <div class="card" id="profile">
                    <br />

                    <div class="row">
                        <div class="col-sm-12">
                            <hr />
                            <div class="row">
                                <div class="col-md-5">
                                    <dt class="mb-0">
                                        Numéro d'Identification National
                                    </dt>
                                </div>
                                <div class="col-sm-2">{{ employe.nin }}</div>

                                <div class="col-md-5">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        رقم التعريف الوطني
                                    </dt>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0">Date de Naissance</dt>
                                </div>

                                <div class="col-sm-3">
                                    {{ employe.dataNaiss }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        تاريخ الميلاد
                                    </dt>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0">Sexe</dt>
                                </div>
                                <h1 v-if="employe.sexe === 'Masculin'">Masculin - ذكر</h1>
                                <h1 v-else>Féminin - أنثى</h1>
                               

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        الجنس
                                    </dt>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Wilaya de naissance
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.cityNaiss }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        مكان الميلاد
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Daïra de naissance
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.dairaNaiss }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        دائرة الميلاد
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Commune de naissance
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.cityNaiss }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        البلدية الميلاد
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">Adresse</dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.addres }} {{ employe.wilaya }}
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.adresseAr }}
                                </div>
                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        العنوان
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Nationalité
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.nationalite }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        الجنسية
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Nom et Prénom de la Mère
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.nameMother }}
                                    {{ employe.lastnameMother }}
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.nameMotherAr }}
                                    {{ employe.lastnameMotherAr }}
                                </div>
                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        اسم و لقب الأم
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Situation Familiale 
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.situation }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        الحالة العائلية
                                    </dt>
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Groupe Sanguin  
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.bloodType }}
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        فصيلة الدم
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-4">
                                    <dt class="mb-0 text-truncate">
                                        Logement d'Astreinte  
                                    </dt>
                                </div>
                                <div class="col-sm-4">
                                    {{ employe.logement }}
                                </div>

                                <div class="col-md-4">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        سكن وظيفي
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Numéro de Téléphone   
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.telephone }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        رقم الهاتف
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">Email  </dt>
                                </div>
                                <div class="col-sm-3">{{ employe.email }}</div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        البريد الإلكتروني
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Numéro de compte bancaire ou CCP
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.bankNumber }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        رقم الحساب البنكي او البريدي
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Agence bancaire
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.bankName }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        الحساب البنكي او البريدي
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Numéro Sécurité Sociale
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.NsocialSecure }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        رقم الإشتراك الضمان الاجتماعي
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Agence mutuelle  
                                    </dt>
                                </div>
                                <div class="col-sm-3">
                                    {{ employe.mutuAgence }}
                                </div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        التعاضدية
                                    </dt>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <dt class="mb-0 text-truncate">
                                        Numéro Mutuelle 
                                    </dt>
                                </div>
                                <div class="col-sm-3">{{ employe.NMutu }}</div>
                                <div class="col-md-3"></div>

                                <div class="col-md-3">
                                    <dt
                                        class="mb-0 text-truncate"
                                        style="text-align: right"
                                    >
                                        رقم الإشتراك في التعاضدية
                                    </dt>
                                </div>
                            </div>
                            <hr />
                        </div>

                        <h3></h3>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    components: {
        AppLayout,
    },
    props: ["employee"],

    data: function () {
        return {
            employe: this.employee,
        };
    },
    methods: {},
    created() {},
    computed: {
        // user() {
        //     return this.$page.props.auth.user;
        // },
    },
};
</script>
