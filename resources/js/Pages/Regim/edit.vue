<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Regime Disciplinaire
            </h2>
        </template>
              <div class="container mx-auto grid grid-cols-4 gap-3">
                

                <div class="form-group">
                    <strong>Degré de la Sanction :</strong>
                    <select class="custom-select d-block w-100" required v-model="regimsData.degre">
                        <option> 1er Degré الدرجة الأول
                        </option>
                        <option>2ème Degré الدرجة الثانية
                        </option>
                        <option>3ème Degré الدرجة الثالثة
                        </option>
                        <option>4ème Degré الدرجـة الرابعة
                        </option>
                    </select>
                </div>


                <div class="form-group">
                    <strong>Type de Faute :</strong>
                    <select class="custom-select d-block w-100" required v-model="regimsData.typef">

                        <option disabled style="background:blue;color:white;font-weight:bold"> 1er Degré أخطاء من الدرجة
                            الأولى </option>
                        <option>
                            Manquement à la Discipline Générale Susceptible de Porter Atteinte au bon Fonctionnement du
                            Service
                            إخلال بالانضباط العام يمكن أن يمس بالسير الحسن للمصالح </option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            2ème Degré الدرجة الثانية </option>
                        <option disabled style="background:green;color:white;font-weight:bold">
                            Porte Préjudice المساس </option>
                        <option>
                            Imprudence à la Sécurité des Personnels سهوا بأمن المستخدمين </option>
                        <option>
                            Imprudence aux Biens de l'Administration سهو بأملاك الإدارة </option>
                        <option>
                            Négligence à la Sécurité des Personnels إهمالا بأمن المستخدمين </option>
                        <option>
                            Négligence aux Biens de l'Administration إهمالا بأملاك الإدارة </option>
                        <option>
                            Transgresse des Obligations Statutaires, autres que celles Prévues aux Articles 180 et 181
                            الإخلال
                            بالواجبات القانونية الأساسية غير تلك المنصوص عليها في المادتين 180 و181 </option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            3ème Degré الدرجة الثالثة </option>
                        <option>
                            Rend Coupable de Détournement de Documents de Servi </option>
                        <option>ce  تحويل غير قانوني للوثائق الإدارية
                            Dissimule des Informations d'Ordre Professionnel qu'il est Tenu de Fournir dans l'Exercice de
                            ses
                            Fonctions إخفاء المعلومات ذات الطابع المهني التي من واجبه تقديمها خلال تأدية مهامه </option>
                        <option>
                            Refuse, sans Motif Valable, d'Exécuter les Instructions de l'Autorité Hiérarchique pour
                            l'Accomplissement de Tâches liées à sa Fonction رفض تنفيذ تعليمات السلطة السلمية في إطار تأدية
                            المهام
                            المرتبطة بوظيفته دون مبرر مقبول </option>
                        <option disabled style="background:green;color:white;font-weight:bold">
                            Divulgue إفشاء </option>
                        <option>
                            Divulgue des Secrets Professionnels الأسرار المهنية </option>
                        <option>
                            Tente de Divulguer des Secrets Professionnels محاولة إفشاء الأسرار المهنية </option>
                        <option disabled style="background:green;color:white;font-weight:bold">
                            Utilise استعمال</option>
                        <option>A des Fins Personnelles au service les Equipements تجهيزات الإدارة لأغراض شخصية </option>
                        <option>
                            A des Fins Personnelles les Biens de l'Administration أملاك الإدارة لأغراض شخصية أو لأغراض خارجة
                            عن
                            المصلحة </option>
                        <option>
                            A des Fins Etrangères au service les Equipements تجهيزات أو أملاك الإدارة لأغراض شخصية أو لأغراض
                            خارجة
                            عن المصلحة </option>
                        <option>
                            A des Fins Etrangères les Biens de l'Administration تجهيزات أو أملاك الإدارة لأغراض شخصية أو
                            لأغراض
                            خارجة عن المصلحة </option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            4ème Degré </option>
                        <option disabled style="background:green;color:white;font-weight:bold">
                            Bénéficier d'Avantages, en Contrepartie d'un Service Rendu, dans le Cadre de l'Exercice de ses
                            Fonctions; </option>
                        <option>
                            Personne Physique </option>
                        <option>
                            Personne Morale </option>
                        <option>
                            Commettre des Actes de Violence sur toute Personne à l'Intérieur du Lieu de Travail; </option>
                        <option disabled style="background:green;color:white;font-weight:bold">
                            Causer, Intentionnellement, des Dégâts Matériels Graves aSusceptibles d'Entraver le bon
                            Fonctionnement
                            du Service; </option>
                        <option>
                            Equipements </option>
                        <option>
                            Patrimoine Immobilier </option>
                        <option>
                            Détruire des Documents Administratifs en vue de Perturber le bon Fonctionnement du Service
                        </option>
                        <option>
                            Falsifier ayant Permis son </option>
                    </select>
                </div>


                <div class="form-group">
                    <strong>Date de la Faute :</strong>
                    <input required type="date" v-model="regimsData.datef" class="mt-1 block w-full">
                </div>



                <div class="form-group">
                    <strong>Type de Sanction :</strong>
                    <select class="custom-select d-block w-100" required  v-model="regimsData.typeS">
                        <option disabled style="background:blue;color:white;font-weight:bold">1er Degré الدرجة الأول
                        </option>
                        <option>
                            Rappel à l'Ordre التنبيه</option>
                        <option>
                            Avertissement Ecrit الإنذار الكتابي</option>
                        <option>
                            Blâme التوبيخ</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            2ème Degré الدرجة الثانية</option>
                        <option>
                            Mise à Pied de 1 à 3 Jours التوقيف عن العمل من يوم (1) إلى ثلاثة (3) أيام</option>
                        <option>
                            Radiation du Tableau d'Avancement الشطب من قائمة التأهيل</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            3ème Degré الدرجة الثالثة</option>
                        <option>
                            Mise à Pied de 4 à 8 Jours لتوقيف عن العمل من أربعـة (4) إلى ثمانية (8) أيام</option>
                        <option>
                            Abaissement d'un ou de deux Echelons التنزيل من درجة إلى درجتين</option>
                        <option>
                            Déplacement d'Office. النقل الإجباري</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            4ème Degré الدرجـة الرابعة</option>
                        <option>
                            Rétrogradation dans le Grade Immédiatement Inférieur التنزيل إلى الرتبة السفلى مباشرة</option>
                        <option>
                            Licenciement التسريح</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Numéro de PV CAP :</strong>
                    <input required type="number" v-model="regimsData.nPV" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Date de PV CAP :</strong>
                    <input required type="date" v-model="regimsData.datePV" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Degré Sanction - Sentence de la Commission</strong>
                    <select class="custom-select d-block w-100" required  v-model="regimsData.degreSonctCom">
                        <option> 1er Degré الدرجة الأول
                        </option>
                        <option>2ème Degré الدرجة الثانية
                        </option>
                        <option>3ème Degré الدرجة الثالثة
                        </option>
                        <option>4ème Degré الدرجـة الرابعة
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <strong>Type de Sanction :</strong>
                    <select class="custom-select d-block w-100" required  v-model="regimsData.typeSonctCom">
                        <option disabled style="background:blue;color:white;font-weight:bold">1er Degré الدرجة الأول
                        </option>
                        <option>
                            Rappel à l'Ordre التنبيه</option>
                        <option>
                            Avertissement Ecrit الإنذار الكتابي</option>
                        <option>
                            Blâme التوبيخ</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            2ème Degré الدرجة الثانية</option>
                        <option>
                            Mise à Pied de 1 à 3 Jours التوقيف عن العمل من يوم (1) إلى ثلاثة (3) أيام</option>
                        <option>
                            Radiation du Tableau d'Avancement الشطب من قائمة التأهيل</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            3ème Degré الدرجة الثالثة</option>
                        <option>
                            Mise à Pied de 4 à 8 Jours لتوقيف عن العمل من أربعـة (4) إلى ثمانية (8) أيام</option>
                        <option>
                            Abaissement d'un ou de deux Echelons التنزيل من درجة إلى درجتين</option>
                        <option>
                            Déplacement d'Office. النقل الإجباري</option>
                        <option disabled style="background:blue;color:white;font-weight:bold">
                            4ème Degré الدرجـة الرابعة</option>
                        <option>
                            Rétrogradation dans le Grade Immédiatement Inférieur التنزيل إلى الرتبة السفلى مباشرة</option>
                        <option>
                            Licenciement التسريح</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Numéro d'Acte de Sanction</strong>
                    <input required type="text" v-model="regimsData.nacte" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Date de Signature d'Acte</strong>
                    <input required type="date" v-model="regimsData.datesign" class="mt-1 block w-full">
                </div>
                <div class="form-group">
                    <strong>Date d'Effet d'Acte</strong>
                    <input required type="date" v-model="regimsData.dateeff" class="mt-1 block w-full">
                </div>

            </div>
                 
            <input
                    required
                    type="hidden"
                    v-model="regimsData.employee_id"
                />

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
            regimsData: this.Regim,
            domaine: [],
        };
    },
    props: ["Regim"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/regim/update/" + this.regimsData.id, this.regimsData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/regim/" + this.regimsData.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
    },
};
</script>
