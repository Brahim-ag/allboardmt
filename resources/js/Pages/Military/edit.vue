<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modification de service national
            </h2>
        </template>
        <div>
           <div class="container mx-auto shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro Justification:</label>
                    <input
                        required
                        type="text"
                        v-model="militairesData.Number"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Date Justification:</label>
                    <input
                        required
                        type="date"
                        v-model="militairesData.date"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de l’acte de mise en position:</label>
                    <input
                        required
                        type="text"
                        v-model="militairesData.NumberPosition"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">
                        date de Signature de l’acte de mise en
                        position:</label
                    >
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateSignature"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">date d'effet de l’acte de mise en position:</label>
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateStart"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">Numéro de l’acte de réintégration:</label>
                    <input
                        required
                        type="text"
                        v-model="militairesData.NumberRein"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">
                        date de Signature de l’acte de réintégration:</label
                    >
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateSignatureRein"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>

                <div class="form-group">
                    <label  class="block text-sm font-medium text-gray-700">date d'effet de l’acte de réintégration:</label>
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateStartRein"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    />
                </div>
            </div>
            <input required type="hidden" v-model="militairesData.employee_id" />
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
            militairesData: this.Military,
            domaine: [],
        };
    },
    props: ["Military"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .put("/api/militaire/update/" + this.militairesData.id, this.militairesData)
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/militaire/" + this.militairesData.employee_id;
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
