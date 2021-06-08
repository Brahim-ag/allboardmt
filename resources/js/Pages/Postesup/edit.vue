<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifiaction Poste Supérieur
            </h2>
        </template>
         <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
           

             <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Direction :</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" @Change="gradeList($event)">
                    <option value="-----">--------</option>
                    <option value="PS_AC_DGCMR">DGCMR</option>
                    <option value="PS_AC_DGEP">DGEP</option>
                    <option value="PS_AC_DGL">DGL</option>
                    <option value="PS_AC_DGUA">DGUA</option>
                    <option value="PS_AC_DGR">DGR</option>
                    <option value="PS_AC_DGV">DGV</option>
                    <option value="PS_AC_DRC">DRC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Poste :</label>
                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="postesupData.poste">
                        <option disabled>{{postesupData.poste}}</option>
                        <option v-for="g,index in grade" :key="index">{{g.ps_fr}} - {{g.ps_ar}}</option>
                    </select>
                </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Type de Mouvement :</label>
                <select
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    id="state"
                    v-model="postesupData.typem"
                >
                    <option>Nomination poste supérieur</option>
                    <option>Mise fin au fonctions</option>
                    <option>chargé</option>
                </select>
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Type d'Acte :</label>
                <select
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    id="state"
                    v-model="postesupData.typea"
                >
                    <option>Arrêté</option>
                    <option>Décision</option>
                </select>
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Numéro d'Acte :</label>
                <input
                    required
                    type="number"
                    v-model="postesupData.number"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Date de Signature d'Acte :</label>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateSignature"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Date d'Effet d'Acte :</label>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateEffect"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Numéro de Visa CF :</label>
                <input
                    required
                    type="number"
                    v-model="postesupData.NumberVisaCf"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Date de Visa CF :</label>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateVisaCf"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>

            <div class="form-group">
                <label  class="block text-sm font-medium text-gray-700">Date d'Installation :</label>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateInsta"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                />
            </div>
              <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">structure d’affectation :</label>
                    <input
                        required
                        type="text"
                        v-model="postesupData.structure"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>
            <input required type="hidden" v-model="postesupData.employee_id" />
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
            postesupData: this.Postesup,
            grade: [],
            direction:'',
            
        };
    },
    props: ["Postesup"],
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
                    "/api/postesup/update/" + this.postesupData.id,
                    this.postesupData
                )
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/postesup/" + this.postesupData.employee_id;
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
