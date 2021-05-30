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
                    <strong>Direction :</strong>
                    <select name="" @Change="gradeList($event)">
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
                    <strong>Poste :</strong>
                    <select v-model="postesupData.poste">
                        <option>{{postesupData.poste}}</option>
                        <option v-for="g,index in grade" :key="index">{{g.ps_fr}} - {{g.ps_ar}}</option>
                    </select>
                </div>

            <div class="form-group">
                <strong>Type de Mouvement :</strong>
                <select
                    class="custom-select d-block w-100"
                    id="state"
                    v-model="postesupData.typem"
                >
                    <option>Nomination poste supérieur</option>
                    <option>Mise fin au fonctions</option>
                    <option>chargé</option>
                </select>
            </div>

            <div class="form-group">
                <strong>Type d'Acte :</strong>
                <select
                    class="custom-select d-block w-100"
                    id="state"
                    v-model="postesupData.typea"
                >
                    <option>Arrêté</option>
                    <option>Décision</option>
                </select>
            </div>

            <div class="form-group">
                <strong>Numéro d'Acte :</strong>
                <input
                    required
                    type="number"
                    v-model="postesupData.number"
                    class="mt-1 block w-full"
                />
            </div>

            <div class="form-group">
                <strong>Date de Signature d'Acte :</strong>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateSignature"
                    class="mt-1 block w-full"
                />
            </div>

            <div class="form-group">
                <strong>Date d'Effet d'Acte :</strong>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateEffect"
                    class="mt-1 block w-full"
                />
            </div>

            <div class="form-group">
                <strong>Numéro de Visa CF :</strong>
                <input
                    required
                    type="number"
                    v-model="postesupData.NumberVisaCf"
                    class="mt-1 block w-full"
                />
            </div>

            <div class="form-group">
                <strong>Date de Visa CF :</strong>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateVisaCf"
                    class="mt-1 block w-full"
                />
            </div>

            <div class="form-group">
                <strong>Date d'Installation :</strong>
                <input
                    required
                    type="date"
                    v-model="postesupData.dateInsta"
                    class="mt-1 block w-full"
                />
            </div>
              <div class="form-group">
                    <strong>structure d’affectation :</strong>
                    <input
                        required
                        type="text"
                        v-model="postesupData.structure"
                        class="mt-1 block w-full"
                    />
                </div>
            <input required type="hidden" v-model="postesupData.employee_id" />
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
