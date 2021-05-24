<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ajouter un employé
            </h2>
        </template>
        <jet-section-border />
        <div class="container mx-auto grid grid-cols-4 gap-3">
            <div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Nom :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.name"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Prénom :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.lastname"
                        class="mt-1 block w-full"
                    />
                </div>
                <jet-input required type="hidden" v-model="employe.team_id" />

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Sexe :" />
                    <select
                        class="mt-1 block w-full"
                        id="state"
                        v-model="employe.sexe"
                    >
                        <option disabled>Choisir...</option>
                        <option value="Masculin">Masculin</option>
                        <option value="Féminin">Féminin</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Date de Naissance :" />
                    <jet-input
                        required
                        type="date"
                        v-model="employe.dataNaiss"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Wilaya de Naissance :" />

                    <select
                        @input="findDaira()"
                        v-model="employe.wilaya"
                        class="mt-1 block w-full"
                    >
                        <option>Oran</option>
                        <option>Alger</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Daïra de Naissance :" />
                    <select
                        :disabled="!employe.wilaya"
                        required
                        class="mt-1 block w-full"
                        v-model="employe.dairaNaiss"
                        @input="findCommune()"
                    >
                        <option v-for="(w, index) in daira" :key="index">
                            {{ w.Daira }}
                        </option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Commun de Naissance :" />
                    <select
                        :disabled="!employe.dairaNaiss"
                        required
                        class="mt-1 block w-full"
                        v-model="employe.cityNaiss"
                    >
                        <option v-for="(w, index) in commune" :key="index">
                            {{ w.Commune }}
                        </option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Nationalité :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nationalite"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Logement d'Astreinte :" />
                    <select
                        required
                        v-model="employe.logement"
                        class="mt-1 block w-full"
                    >
                        <option>------------------------</option>
                        <option>
                            Logement de fonction à titre dérogatoire سكن وظيفي
                            عل سبيل الترخيص
                        </option>
                        <option>Logement d'astreinte سكن وظيفي</option>
                        <option>
                            Bien de l'état géré par l'OPGI أملاك الدولة مسيرة من
                            طرف دواوين الترقية و التسيير العقاري
                        </option>
                        <option>
                            Bien de l'état géré par les domaines مسيرة من طرف
                            مديرية أملاك الدولة
                        </option>
                    </select>
                </div>
            </div>

            <div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Prénom du Père :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nameFather"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Nom de la Mère :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nameMother"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Prénom de la Mère :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.lastnameMother"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Wilaya d'Adresse :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.addres"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="numéro de Sécurité Sociale :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.NsocialSecure"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Numero de Mutuelle :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.NMutu"
                        class="mt-1 block w-full"
                    />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Agence Mutuelle :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.mutuAgence"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Nom Mutuelle :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nameMutu"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Maladie Chronique :" />
                    <select v-model="employe.maladie" class="mt-1 block w-full">
                        <option>
                            --------------------------------------------
                        </option>
                        <option>
                            La tuberculose sous toutes ses formes, مرض السل بكل
                            أشكاله.
                        </option>
                        <option>
                            Les psychonévroses graves, الأمراض العصبية الخطيرة.
                        </option>
                        <option>
                            Les Maladies cancéreuses, الأمراض السرطانية.
                        </option>
                        <option>Les hémopathies أمراض الدم</option>
                        <option>La sarcoïdose, داء الساركويد.</option>
                        <option>
                            L’hypertension artérielle maligne, الضغط الدموي
                            الشرياني الخبيث.
                        </option>
                        <option>
                            Les maladies cardiaques et vasculaires suivantes :
                            الأمراض القلبية الشريانية التالية :
                        </option>
                        <option>Angine de poitrine, الذبحة الصدرية .</option>
                        <option>
                            Infarctus du myocarde, الجلطة القلبية (احتشاء العضلة
                            القلبية) .
                        </option>
                        <option>
                            Pontage aorto-coronarien, انحراف مسار الشريان التاجي
                            .
                        </option>
                        <option>
                            Remplacement valvulaire prothétique, استبدال الصمام
                            بآخر اصطناعي .
                        </option>
                        <option>
                            Valvulopathie décompensée أمراض الصمام المتقدمة .
                        </option>
                        <option>
                            Maladies athéromateuses évoluées, أمراض تصلب
                            الشرايين المتقدمة .
                        </option>
                        <option>
                            Artérite des membres inférieurs, شرايين الأطراف
                            السفلية .
                        </option>
                        <option>
                            Accident vasculaire cérébral, méningé
                            ou cérébro-méningé, السكتة الدماغية(أو الجلطة
                            الدماغية) التهاب السحايا أو التهاب السحايا الدماغي .
                        </option>
                        <option>
                            Troubles du rythme avec stimulateur, عدم انتظام
                            ضربات القلب و تركيب جهاز تنظيم الضربات،
                        </option>
                        <option>
                            Les maladies neurologiques suivantes: الأمراض
                            العصبية التالية:
                        </option>
                        <option>Sclérose en plaques, التصلب اللّويحي.</option>
                        <option>
                            Syndromes extra pyramidaux,  متلازمات خارج الهرمية .
                        </option>
                        <option>
                            Paraplégies Hémiplégies الشلل النصفي المسبب للفالج
                            (جرح لدماغ) .
                        </option>
                        <option>
                            Epilepsies du lobe temporal, myocloniques
                            progressives et post traumatiques, مرض الصرع (الفص
                            الصدغي)
                        </option>
                        <option>
                            Maladies musculaires ou neuromusculaires suivantes :
                            الأمراض العضلية أو العضلية العصبية :
                        </option>
                        <option>Polynévrites, إلتهاب الأعصاب,</option>
                        <option>
                            Amyotrophies spinales progressives, الضمور العضلي
                            الشوكي التدرجي .,
                        </option>
                        <option>
                            Myopathies, داء الحثل العضلي (ضمور النسيج العضلي) .
                        </option>
                        <option>Myasthénies, الوهن العضلي .</option>
                        <option>Les encéphalopathies, الاعتلال الدماغي</option>
                    </select>
                </div>
                <jet-label value="Groupe Sanguin :" />

                <select
                    class="mt-1 block w-full"
                    v-model="employe.bloodType"
                    id=""
                >
                    <option>
                        --------------------------------------------
                    </option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>
                </select>
            </div>

            <div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Type de Fonctionnaire :" />
                    <select
                        required
                        v-model="employe.typeContrat"
                        class="mt-1 block w-full"
                    >
                        <option>Titulaire</option>
                        <option>Agent Contractuel</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Type de Contrat :" />
                    <select
                        required
                        v-model="employe.actContrat"
                        class="mt-1 block w-full"
                    >
                        <option>----------------</option>
                        <option>Contrat à Durée indéterminée</option>
                        <option>Contrat à Durée Déterminée</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Durée du Contrat :" />
                    <select
                        required
                        v-model="employe.timeContrat"
                        class="mt-1 block w-full"
                    >
                        <option>----------------</option>
                        <option>Temps plein</option>
                        <option>Temps Partiel</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Numéro de Compte Bancaire ou CCP :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.bankNumber"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Compte Bancaire ou CCP :" />

                    <select
                        v-model="employe.bankName"
                        class="mt-1 block w-full"
                    >
                        <option>
                            --------------------------------------------
                        </option>
                        <option>
                            Compte Chèque Postal الحساب البريدي الجاري
                        </option>
                        <option>
                            BEA (Banque Extérieure d’Algérie) بنك الجزائر
                            الخارجي
                        </option>
                        <option>
                            BNA (Banque Nationale d’Algérie) البنك الوطني
                            الجزائري
                        </option>
                        <option>
                            CPA (Crédit Populaire d’Algérie) القرض الشعبي
                            الجزائري
                        </option>
                        <option>
                            BDL (Banque de Développement Local) بنك التنمية
                            المحلية
                        </option>
                        <option>
                            BADR (Banque de l’Agriculture et du Développement
                            Rural) بنك الفلاحة والتنمية الريفية
                        </option>
                        <option>
                            CNEP-Banque (Caisse Nationale d’Epargne et de
                            Prévoyance- Banque-) الصندوق الوطني للتوفير
                            والإحتياط
                        </option>
                        <option>
                            AL BARAKA (Banque AL Baraka d’Algérie) بنك البركة
                            الجزائر
                        </option>
                        <option>
                            CITIBANK سيتي بنك الجزائر ABC (Arab Banking
                            Corporation Algeria) المؤسسة المصرفية العربية
                            الجزائر
                        </option>
                        <option>Natixis ALGERIE بنك ناتكسيس الجزائر</option>
                        <option>
                            Société Générale Algérie سوسيتيه جنرال الجزائر
                        </option>
                        <option>
                            Arab Bank PLC Algeria البنك العربي الجزائر
                        </option>
                        <option>BNP Paribas Al-djazair باريبا الجزائر</option>
                        <option>TRUST BANK Algeria بنك الثقة الجزائر</option>
                        <option>
                            Housing Bank (The Housing Bank For Trade and Finance
                            – Algeria) بنك الإسكان للتجارة والتمويل الجزائر
                        </option>
                        <option>
                            AGB (Gulf Bank Algérie) بنك الخليج الجزائر
                        </option>
                        <option>Fransabank Al-Djazair بنك فرنسا الجزائر</option>
                        <option>
                            Crédit Agricole Corporate Et Investissement Bank
                            Algérie (Ex CALYON) قرض الفلاحة وبنك المؤساسات
                            الاسنثمارية الجزائر
                        </option>
                        <option>HSBC Algeria إتش إس بي سي الجزائر</option>
                        <option>
                            Al salam Bank Algeria بنك السلام الجزائر
                        </option>
                        <option>
                            CNMA (Caisse Nationale de Mutualité Agricole)
                            الصندوق الوطني للتعاون الفلاحي
                        </option>
                        <option>Trésor الخزينة العمومية</option>
                        <option>Trésor</option>
                        <option>Trésor Centrale الخزينة المركزية</option>
                        <option disable>
                            Trésor de Wilaya الخزينة الولائية
                        </option>
                        <option>Trésor de Wilaya : Adrar</option>
                        <option>Trésor de Wilaya : Chlef</option>
                        <option>Trésor de Wilaya : Laghouat</option>
                        <option>Trésor de Wilaya : Oum El Bouaghi</option>
                        <option>Trésor de Wilaya : Batna</option>
                        <option>Trésor de Wilaya : Béjaïa</option>
                        <option>Trésor de Wilaya : Biskra</option>
                        <option>Trésor de Wilaya : Béchar</option>
                        <option>Trésor de Wilaya : Blida</option>
                        <option>Trésor de Wilaya : Bouira</option>
                        <option>Trésor de Wilaya : Tamanrasset</option>
                        <option>Trésor de Wilaya : Tébessa</option>
                        <option>Trésor de Wilaya : Tlemcen</option>
                        <option>Trésor de Wilaya : Tiaret</option>
                        <option>Trésor de Wilaya : Tizi Ouzou</option>
                        <option>Trésor de Wilaya : Alger</option>
                        <option>Trésor de Wilaya : Djelfa</option>
                        <option>Trésor de Wilaya : Jijel</option>
                        <option>Trésor de Wilaya : Sétif</option>
                        <option>Trésor de Wilaya : Saïda</option>
                        <option>Trésor de Wilaya : Skikda</option>
                        <option>Trésor de Wilaya : Sidi Bel Abbès</option>
                        <option>Trésor de Wilaya : Annaba</option>
                        <option>Trésor de Wilaya : Guelma</option>
                        <option>Trésor de Wilaya : Constantine</option>
                        <option>Trésor de Wilaya : Médéa</option>
                        <option>Trésor de Wilaya : Mostaganem</option>
                        <option>Trésor de Wilaya : M'Sila</option>
                        <option>Trésor de Wilaya : Mascara</option>
                        <option>Trésor de Wilaya : Ouargla</option>
                        <option>Trésor de Wilaya : Oran</option>
                        <option>Trésor de Wilaya : El Bayadh</option>
                        <option>Trésor de Wilaya : Illizi</option>
                        <option>Trésor de Wilaya : Bordj Bou Arreridj</option>
                        <option>Trésor de Wilaya : Boumerdès</option>
                        <option>Trésor de Wilaya : El Tarf</option>
                        <option>Trésor de Wilaya : Tindouf</option>
                        <option>Trésor de Wilaya : Tissemsilt</option>
                        <option>Trésor de Wilaya : El Oued</option>
                        <option>Trésor de Wilaya : Khenchela</option>
                        <option>Trésor de Wilaya : Souk Ahras</option>
                        <option>Trésor de Wilaya : Tipaza</option>
                        <option>Trésor de Wilaya : Mila</option>
                        <option>Trésor de Wilaya : Aïn Defla</option>
                        <option>Trésor de Wilaya : Naâma</option>
                        <option>Trésor de Wilaya : Aïn Témouchent</option>
                        <option>Trésor de Wilaya : Ghardaïa</option>
                        <option>Trésor de Wilaya : Relizane</option>
                    </select>
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Agence Banque :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.bankAgency"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Numéro Banque :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.bankSNumber"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Téléphone :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.telephone"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Email :" />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.email"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Situation Familiale :" />
                    <select
                        class="mt-1 block w-full"
                        id="state"
                        v-model="employe.situation"
                    >
                        <option disabled>Choisir...</option>
                        <option value="Celibataire">Celibataire</option>
                        <option value="Marie (e)">Marie (e)</option>
                        <option value="Veuf (e)">Veuf (e)</option>
                        <option value="Divorce (e)">Divorce (e)</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Niveau Informatique " />
                    <select
                        class="mt-1 block w-full"
                        id="state"
                        v-model="employe.itlvl"
                    >
                        <option>
                            --------------------------------------------
                        </option>
                        <option>Primo-débutant</option>
                        <option>Débutant</option>
                        <option>Familier</option>
                        <option>Expérimenté</option>
                        <option>Administrateur</option>
                        <option>Programmeur</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value="Numéro d'Identification National" />
                    <jet-input
                        required
                        type="number"
                        v-model="employe.nin"
                        class="mt-1 block w-full"
                    />
                </div>
            </div>

            <div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": الإسم " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nameAr"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": اللقب " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.lastnameAr"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": اسم الأب " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.namefatherAr"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": اسم الأم " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.nameMotherAr"
                        class="mt-1 block w-full"
                    />
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": لقب الأم " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.lastnameMotherAr"
                        class="mt-1 block w-full"
                    />
                </div>
                <div class="col-span-6 sm:col-span-2">
                    <jet-label value=": العنوان " />
                    <jet-input
                        required
                        type="text"
                        v-model="employe.adresseAr"
                        class="mt-1 block w-full"
                    />
                </div>

                <button @click="addEmploye()" class="btn btn-primary">
                    Valider
                </button>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

import JetActionMessage from "@/Jetstream/ActionMessage";
import JetActionSection from "@/Jetstream/ActionSection";
import JetButton from "@/Jetstream/Button";
import JetConfirmationModal from "@/Jetstream/ConfirmationModal";
import JetDangerButton from "@/Jetstream/DangerButton";
import JetDialogModal from "@/Jetstream/DialogModal";
import JetFormSection from "@/Jetstream/FormSection";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";
import JetLabel from "@/Jetstream/Label";
import JetSecondaryButton from "@/Jetstream/SecondaryButton";
import JetSectionBorder from "@/Jetstream/SectionBorder";

export default {
    components: {
        AppLayout,
        JetActionMessage,
        JetActionSection,
        JetButton,
        JetConfirmationModal,
        JetDangerButton,
        JetDialogModal,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
        JetSecondaryButton,
        JetSectionBorder,
    },
    data: function () {
        return {
            commune: [],
            daira: [],
            employe: {
                team_id: this.$page.props.auth.user.current_team_id,
            },
        };
    },
    methods: {
        findDaira() {
            axios
                .get("/wilaya/31.json")
                .then((response) => (this.daira = response.data));
        },
        findCommune() {
            axios
                .get("/wilaya/31.json")
                .then((response) => (this.commune = response.data));
        },
        addEmploye() {
            axios
                .post("/api/employee/store", this.employe)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/";
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    computed: {
        user() {
            return this.$page.props.auth.user;
        },
    },
};
</script>
