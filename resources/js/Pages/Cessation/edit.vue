<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mise en disponibilité
            </h2>
        </template>
            <div>
                 <div>
               
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Motif :</label>
                    <select required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="state" v-model="cessationData.motif">
                        <option>
                            Déchéance de la Nationalité Algérienne التجريد من الجنسية الجزائرية</option>
                        <option> Perte de la Nationalité Algérienne فقدان الجنسية الجزائرية</option>
                        <option>
                            Déchéance des Droits Civiques فقدان الحقوق المدنية</option>
                        <option>
                            Démission Régulièrement Acceptée الاستقالة المقبولة بصفة قانونية</option>
                        <option>
                            Révocation العـزل</option>
                        <option>
                            Licenciement التسريح</option>
                        <option>
                            Admission à la Retraite الإحالة على التقاعد</option>
                        <option>
                            Décès الوفاة</option>
                        

                    </select>
                </div>


                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Type d'Acte :</label>
                    <input required type="text" v-model="cessationData.typeA" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>


                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date d'Effet :</label>
                    <input required type="date" v-model="cessationData.dateA" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numero d'Acte :</label>
                    <input required type="number" v-model="cessationData.nRef" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date de Signature :</label>
                    <input required type="date" v-model="cessationData.dateSign" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                 <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de Visa CF :</label>
                    <input required type="number" v-model="cessationData.numberCf" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date de Visa CF :</label>
                    <input required type="date" v-model="cessationData.dateEffeCF" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>



               
            </div>
                <input
                    required
                    type="hidden"
                    v-model="cessationData.employee_id"
                />
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
            cessationData: this.Cessation,
            domaine: [],
        };
    },
    props: ["Cessation"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/cessation/update/" + this.cessationData.id, this.cessationData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/cessation/" + this.cessationData.employee_id;
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
