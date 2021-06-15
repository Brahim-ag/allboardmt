<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nouvelle Fonction Supérieure
            </h2>
        </template>
              <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
               
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Fonction :</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="state" v-model="fonctionsupData.function">
                        <option>Secrétaire Général  أمين عام</option>
                        <option>Directeur Général  مدير عام</option>
                        <option>Chef de Cabinet رئيس الديوان</option>
                        <option>Inspecteur Général مفتش عام</option>
                        <option>Inspecteur مفتش</option>
                        <option>Directeur Central  مدير مركزي</option>
                        <option>Inspecteur  مفتش عام</option>
                        <option>Chargé d'études et de synthèse مكلف بالدراسات و التلخيص</option>
                        <option>Directeur d'Etudes مدير الدراسات</option>
                        <option>Directeur مدير</option>
                        <option>Sous-Directeur نائب مدير</option>
                        <option>Chef d'Etudes au Cabinet Ministériel de la Sécurité رئيس دراسات لدى المكتب الوزاري للأمن</option>
                        <option>Directeur de Wilaya  مدير ولائي</option>
                        <option>Directeur de Wilaya Déléguée مدير منتدب</option>
                    </select>
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Type du Mouvement :</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="state" v-model="fonctionsupData.typem">
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
                    <label  class="block text-sm font-medium text-gray-700">Type d'Acte :</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="state" v-model="fonctionsupData.typea">
                        <option>Arrêté</option>
                        <option>Décision</option>
                        <option>Décret</option>
                    </select>

                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro d'Acte :</label>
                    <input required type="number" v-model="fonctionsupData.number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date de Signature d'Acte :</label>
                    <input required type="date" v-model="fonctionsupData.dateSignature" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d'Effet d'Acte :</label>
                    <input required type="date" v-model="fonctionsupData.dateEffect" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de visa DGFP :</label>
                    <input required type="number" v-model="fonctionsupData.NumberVisaDGFP" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d'Effet de visa DGFP :</label>
                    <input required type="date" v-model="fonctionsupData.dateVisaDGFP" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de Visa CF :</label>
                    <input required type="number" v-model="fonctionsupData.NumberVisaCf" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d'Effet de Visa CF :</label>
                    <input required type="date" v-model="fonctionsupData.dateVisaCf" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de l'Accord :</label>
                    <input required type="number" v-model="fonctionsupData.numberAcc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date de l'Accord :</label>
                    <input required type="date" v-model="fonctionsupData.dateAcc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d'Installation :</label>
                    <input required type="date" v-model="fonctionsupData.dateInsta" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>




            </div>
        </div>

        <button @click="postData()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Valider</button>
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
  data() {
    return {
      fonctionsupData: {},
      grade: [],
      direction: "",
    };
  },
  props: ["employee_id"],
  methods: {
    gradeList(event) {
      this.grade = [];
      axios
        .get("/jsonData/" + event.target.value + ".json")
        .then((response) => (this.grade = response.data));
      //.then((response) => console.log(response.data));
    },
    postData() {
      axios
        .post("/api/fonctionsups/store", this.fonctionsupData)
        .then((response) => {
          if (response.status == 201) {
            window.location.href = "/fonctionsups/" + this.employee_id;
          }
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  created() {
    this.fonctionsupData.employee_id = this.employee_id;
  },
};
</script>
