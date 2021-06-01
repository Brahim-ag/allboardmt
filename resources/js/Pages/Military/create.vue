<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Nouveau Service National
            </h2>
        </template>
        <div>
           
                   <div class="container mx-auto grid grid-cols-4 gap-3">
                  <div class="col-span-6 sm:col-span-2">
                        <div class="form-group">
                            <strong>Numéro Justification:</strong>
                            <input
                                required
                                type="text"
                                v-model="militairesData.Number"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date Justification:</strong>
                            <input
                                required
                                type="date"
                                v-model="militairesData.date"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >Numéro de l’acte de mise en position:</strong
                            >
                            <input
                                required
                                type="text"
                                v-model="militairesData.NumberPosition"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >date de Signature de l’acte de mise en
                                position:</strong
                            >
                            <input
                                required
                                type="date"
                                v-model="militairesData.dateSignature"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >date d'effet de l’acte de mise en
                                position:</strong
                            >
                            <input
                                required
                                type="date"
                                v-model="militairesData.dateStart"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Numéro de l’acte de réintégration:</strong>
                            <input
                                required
                                type="text"
                                v-model="militairesData.NumberRein"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >date de Signature de l’acte de
                                réintégration:</strong
                            >
                            <input
                                required
                                type="date"
                                v-model="militairesData.dateSignatureRein"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong
                                >date d'effet de l’acte de
                                réintégration:</strong
                            >
                            <input
                                required
                                type="date"
                                v-model="militairesData.dateStartRein"
                                class="mt-1 block w-full"
                            />
                        </div>
                    </div>
                </div>
                <input
                    required
                    type="hidden"
                    v-model="militairesData.employee_id"
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
            militairesData: {},
            domaine: [],
        };
    },
    props: ["employee_id"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        postData() {
            axios
                .post("/api/militaire/store", this.militairesData)
                .then((response) => {
                    if (response.status == 201) {
                        window.location.href = "/militaire/" + this.employee_id;
                    }
                })
                .catch((e) => {
                    console.log(e);
                });
        },
    },
    created() {
        this.domainList();
        this.militairesData.employee_id = this.employee_id;
    },
};
</script>
