<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifiaction Poste Supérieur
            </h2>
        </template>
       <div class="container mx-auto grid grid-cols-4 gap-3">
                 <div class="col-span-6 sm:col-span-2">
           

            
                <div class="form-group">
                    <strong>Fonction :</strong>
                    <select class="custom-select d-block w-100" id="state" v-model="fonctionsupData.function">
                        <option>Secrétaire Général  أمين عام</option>
                        <option>
                            Directeur Général  مدير عام</option>
                        <option>
                            Chef de Cabinet رئيس الديوان</option>
                        <option>
                            Inspecteur Général مفتش عام</option>
                        <option>
                            Directeur Central  مدير مركزي</option>
                        <option>
                            Inspecteur  مفتش عام</option>
                        <option>
                            مكلف بالدراسات و التلخيص</option>
                        <option>
                            مدير دراسات</option>
                        <option>
                            Sous-Directeur نائب مدير</option>
                        <option>
                            رئيس دراسات لدى المكتب الوزاري للأمن</option>
                        <option>
                            Directeur de Wilaya  مدير ولائي</option>
                        <option>
                            Directeur de Wilaya Déléguée مدير منتدب</option>
                       <option> Secrétariat Générale الأمين العام</option>
                        <option>
                            Directeur d'Etudes مدير الدراسات</option>
                        <option>

                            Chef de Cabinet رئـيس الديوان</option>
                        <option>
                            Chargés d'Etudes et de Synthèse مكلف بالدراسات و التلخيص</option>
                        <option>

                            Inspection Générale المفتشية العامة</option>
                        <option>
                            Inspecteur مفتش</option>
                        <option>

                            Direction Générale du Logement الــعــامــة الــعــامــة لــلـســكن</option>
                        <option>
                            Directeur d'Etudes مدير الدراسات</option>
                        <option>

                            Direction du Logement Public Locatif مـديـريــة الـسـكن الـعــمـومي الإيـجـاري</option>
                        <option>

                            Sous-Direction de la Programmation et des Études Financières المديـرية الـفـرعيـ الـفـرعيـة
                            للـبرمـجـة والدراسـات الماالـية</option>
                        <option>
                            Bureau de la Programmation Financière مكتب البرمجة المالية</option>
                        <option>
                            Bureau d’Expertise Financière مكتب الخبرات المللية</option>
                        <option>

                            Sous-Direction du Suivi des Réalisations المديريـة الـفـرعـية الـفـرعـية لمتابعة الإنجازات
                        </option>
                        <option>
                            Bureau du Suivi des Programmes de Logements Publics Locatifs مــكــتـب مــتــابــعــة بــرامج
                            الــســكــنــات الــعــمــومــيـة الإيجارية</option>
                        <option>
                            Bureau d’Assistance et d’Accompagnement aux Maitres d’Ouvrages Délégués مــكـــتب مــســاعــدة
                            ومــرافــقــة أصــحــاب المــشــاريع المنتدبين</option>
                        <option>

                            Direction du Logement Promotionnel مـديريـة مـديريـة السـكن التـرقوي</option>
                        <option>

                            Sous-Direction de la Programmation et des Études Financières المديـرية الـفـرعيـة للـبرمـجـة
                            والدراسـات المالـية</option>
                        <option>
                            Bureau des Programmes et du Suivi Financier مكتب البرمجة والمتابعة المالية</option>
                        <option>
                            Bureau des Études et Expertises Financières مكتب الدراسات والخبرات المالية</option>
                        <option>

                            Sous-Direction du Suivi des Réalisations المديريـة الـفـرعـية لمتـابـعـة الإنجازات</option>
                        <option>
                            Bureau du Suivi du Logement Promotionnel Aidé مكتب متابعة السكن الترقوي المدعم</option>
                        <option>
                            Bureau du Suivi du Logement Location-Vente مكتب متابعة سكن البيع بالإيجار</option>
                        <option>
                            Bureau du Suivi du Logement Promotionnel Public et Privé مــكـــتب مــتـــابــعـــة الــســكـن
                            الــتـــرقــوي الــعـــمــومي والخاص</option>
                        <option>
                            Bureau de la Règlementation et des Normes de Qualité مكتب التنظيم ومعايير النوعية</option>
                        <option>

                            Direction de l’Habitat Rural, de la Résorption de l’Habitat Précaire et de la Réhabilitation du
                            Cadre Bâti مـــديـــريــة الـــســكـن الــريـــفي وامـــتــصـــاص الـــســكن الـهش وإعـادة
                            تأهـيل الإطـار المـبني</option>
                        <option>

                            Sous-Direction de l’Habitat Rural المديـريـة الـفـرعـيـة لـلـسكـن الريـفي</option>
                        <option>
                            Bureau du Suivi Physique des Programmes d’habitat Rural مكتب المابعة المادية لبرامج السكن الريفي
                        </option>
                        <option>
                            Bureau du Suivi Financier des Programmes d’habitat Rural مكتب المابعة المالية لبرامج السكن
                            الريفي</option>
                        <option>

                            Sous-Direction de La Résorption de l’Habitat Précaire et de la Réhabilitation du Cadre Bâti
                            المـديـــريــة الــفــرعـــيــة لامــتــصــاص الـــســك الـــســكن الــهش وإعادة تأهيل الإطار
                            المبني</option>
                        <option>
                            Bureau du Suivi des Programmes de Résorption de l’Habitat Précaire مكتب متابعة برامج امتصاص
                            السكن الهش</option>
                        <option>
                            Bureau du Suivi des Programmes de Réhabilitation du Vieux Bâti مـــكـــتب مـــتـــابـــعـــة
                            بـــرامج إعـــادة تـــأهـــيل المــبـــنى القديم</option>
                        <option>

                            Direction de la Gestion Immobilière مـديـريـة مـديـريـة الــتـسـيـيــر الـعـقـاري</option>
                        <option>

                            Sous-Direction du Suivi des Attributions et de la Cession des Biens Immobiliers Locatifs
                            المـديــريـة الــفــرعـيــة لمــتـابــعــة المنح والــتــنـازل عن لأملاك الـــعـــقـــاريـــة
                            الإيـــجـــاريــة</option>
                        <option>
                            Bureau du Suivi des Attributions et de Mise en Œuvre de la Politique des Loyers مـــكـــتب
                            مـــتـــابــعـــة المــنح و وضع حـــيـــز الـــتــنـــفـــيــذ سياسة الإيجار</option>
                        <option>
                            Bureau de la Cession des Biens et de la Promotion de la Copropriété مــكــتـب الــتــنــازل عن
                            الأملاك وتـــرقــيــة المــلــكــيــة المشتركة</option>
                        <option>
                            Bureau de l’Entretien et de la Maintenance du Parc Immobilier مـــــكــــــتـب الحـــــفــــــاظ
                            عن الحــــــظــــــيـــــرة الــــــعـــــقــــــاريـــــة وصيانتها</option>
                        <option>
                            Bureau du Traitement des Requêtes et des Relations Avec le Public مـــــــكـــــــتـب
                            دراســـــــة الـــــــعــــــرائـض والـــــــعـلاقـــــــات مع الجمهور</option>
                        <option>

                            Sous-Direction de l’Animation et du Contrôle de la Gestion Immobilière المديـرية الـفرعـية
                            لـتـنشـيط التـسـييـر العـقاري ومراقبته</option>
                        <option>
                            Bureau du Contrôle et de l’Analyse de l’Activité de la Gestion des Biens Immobiliers Locatifs
                            مــــكـــــتب مـــــراقـــــبـــــة نــــشـــــاط تـــــســـــيــــيـــــر الأملاك العقارية
                            الإيجارية وتحليله</option>
                        <option>
                            Bureau de l’Animation du Suivi de la Préservation du Patrimoine Immobilier مـكـتب تـنـشـيط
                            مــتـابـعـة المحـافـظـة عـلى الـتـراث العقاري</option>
                        <option>

                            Direction Générale des Equipements Publics المـــديــــريــــة الــــعــــامــــة
                            لــــلــــتــــجــــهــــيـــزات العمومية</option>
                        <option>

                            Direction du Suivi de la Réalisation des Programmes d’Équipements Publics des Secteurs de la
                            Formation مـــديـــريـــة مـــتــابـــعـــة إنجـــاز بــرامـج الــتـــجـــهـــيــزات
                            الــعــمـــومــيــة لــقـــطــاعــات لــقـــطــاعــات الـــتــكــوين</option>
                        <option>

                            Sous-Direction Du Suivi Des Programmes d’Équipements De l’Éducation Nationale المــديـــريــة
                            الـــفــرعـــيـــة لمــتـــابــعـــة بــرامـج تجــهـــيــزات التربية الوطنية</option>
                        <option>
                            Bureau des Equipements Publics du Cycle Primaire مكـتب الـتجـهيـزات العـمـوميـة الخاصـة بالـطور
                            الابتدائي</option>
                        <option>
                            Bureau des Equipements Publics du Cycle Moyen مكـتب الـتجـهيـزات العـمـوميـة الخاصـة بالـطور
                            المتوسط</option>
                        <option>
                            Bureau des Equipements Publics du Cycle Secondaire مكـتب الـتجـهيـزات العـمـوميـة الخاصـة
                            بالـطور الثانوي</option>
                        <option>

                            Sous-Direction du Suivi des Programmes d'Équipements de l’Enseignement Supérieur et de la
                            Formation Professionnelle المــــديــــريــــة الــــفــــرعــــيـــة لمـــتــــابــــعــــة
                            إنجــــازبــــرامج تجـهيـزات التـعـليم التـعـليم الـعالي الـعالي والـتـكوين اHـهني</option>
                        <option>
                            Bureau du Suivi des Structures Pédagogiques مكتب متابعة برامج الهياكل التعليمية</option>
                        <option>
                            Bureau du Suivi des Structures de Soutien et d’Hébergement مكتب متابعة برامج هياكل الدعم
                            والإيواء</option>
                        <option>

                            Direction du Suivi de la Réalisation des Programmes des Équipements Socio-Culturels et Autres
                            مـــديـــريـــة مـــتــابـــعـــة إنجـــاز إنجـــاز بــرامـج بــرامـج الــتـــجـــهـــيــزا
                            الــتـــجـــهـــيــزات</option>
                        <option>

                            Sous-Direction des Programmes d'Équipements de la Culture et de la Jeunesse et du Sport
                        </option>
                        <option>
                            Bureau du Suivi des Programmes d’Équipements Relevant du Secteur de la Culture </option>
                        <option>
                            Bureau du Suivi des Programmes d’Équipements Relevant du Secteur de la Jeunesse et des Sports
                        </option>
                        <option>

                            Sous-Direction du Suivi des Autres Programmes d’Équipements Administratifs </option>
                        <option>
                            Bureau du Suivi des Programmes d’Équipements Relevant du Secteur de l’Habitat, de l’Intérieur et
                            Autres </option>
                        <option>
                            Bureau du Suivi des Programmes d’Équipements Relevant du Secteur de la Justice, des Finances, de
                            la Santé et des Affaires Religieuses </option>



                    </select>
                </div>



                <div class="form-group">
                    <strong>Type du Mouvement :</strong>
                    <select class="custom-select d-block w-100" id="state" v-model="fonctionsupData.typem">
                        <option>Nomination fonction supérieur par intérim,</option>
                        <option>Renouvellement d’intérim (1 an)</option>
                        <option>Renouvellement d’intérim (06 mois)</option>
                        <option>Nomination fonction supérieur par décret</option>
                        <option>Reclassement</option>
                        <option>Mise fin de fonctions</option>
                        <option>Délégation de signature,</option>
                        <option>chargé</option>
                        <option>Fin de Chargé</option>
                    </select>

                </div>

                <div class="form-group">
                    <strong>Type d'Acte :</strong>
                    <select class="custom-select d-block w-100" id="state" v-model="fonctionsupData.typea">
                        <option>Arrêté</option>
                        <option>Décision</option>
                        <option>Décret</option>
                    </select>

                </div>

                <div class="form-group">
                    <strong>Numéro d'Acte :</strong>
                    <input required type="number" v-model="fonctionsupData.number" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date de Signature d'Acte :</strong>
                    <input required type="date" v-model="fonctionsupData.dateSignature" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date d'Effet d'Acte :</strong>
                    <input required type="date" v-model="fonctionsupData.dateEffect" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Numéro de visa DGFP :</strong>
                    <input required type="number" v-model="fonctionsupData.NumberVisaDGFP" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date d'Effet de visa DGFP :</strong>
                    <input required type="date" v-model="fonctionsupData.dateVisaDGFP" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Numéro de Visa CF :</strong>
                    <input required type="number" v-model="fonctionsupData.NumberVisaCf" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date d'Effet de Visa CF :</strong>
                    <input required type="date" v-model="fonctionsupData.dateVisaCf" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Numéro de l'Accord :</strong>
                    <input required type="number" v-model="fonctionsupData.numberAcc" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date de l'Accord :</strong>
                    <input required type="date" v-model="fonctionsupData.dateAcc" class="form-control">
                </div>

                <div class="form-group">
                    <strong>Date d'Installation :</strong>
                    <input required type="date" v-model="fonctionsupData.dateInsta" class="form-control">
                </div>

            <input required type="hidden" v-model="fonctionsupData.employee_id" />
        </div>
        </div>
        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
    data() {
        return {
            fonctionsupData: this.Fonctionsup,
            grade: [],
            direction:'',
            
        };
    },
    props: ["Fonctionsup"],
    methods: {
        gradeList(event) {
            this.grade = []
            axios
                .get("/jsonData/"+event.target.value+".json")
                .then((response) => (this.grade = response.data));
            //.then((response) => console.log(response.data));
        },
        postData() {
            axios
                .put(
                    "/api/fonctionsups/update/" + this.fonctionsupData.id,
                    this.fonctionsupData
                )
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/fonctionsups/" + this.fonctionsupData.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
    },
};
</script>
