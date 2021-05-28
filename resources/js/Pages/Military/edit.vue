<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mise en disponibilité
            </h2>
        </template>
        <div class="container mx-auto grid grid-cols-4 gap-3">
            <div class="col-md-4 order-md-2 mb-4">
                <div class="form-group">
                    <strong>Numéro Justification:</strong>
                    <input
                        required
                        type="text"
                        v-model="militairesData.Number"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Date Justification:</strong>
                    <input
                        required
                        type="date"
                        v-model="militairesData.date"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Numéro de l’acte de mise en position:</strong>
                    <input
                        required
                        type="text"
                        v-model="militairesData.NumberPosition"
                        class="form-control"
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
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>date d'effet de l’acte de mise en position:</strong>
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateStart"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>Numéro de l’acte de réintégration:</strong>
                    <input
                        required
                        type="text"
                        v-model="militairesData.NumberRein"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong
                        >date de Signature de l’acte de réintégration:</strong
                    >
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateSignatureRein"
                        class="form-control"
                    />
                </div>

                <div class="form-group">
                    <strong>date d'effet de l’acte de réintégration:</strong>
                    <input
                        required
                        type="date"
                        v-model="militairesData.dateStartRein"
                        class="form-control"
                    />
                </div>
            </div>
            <input required type="hidden" v-model="militairesData.employee_id" />
        </div>

        <button @click="postData()" class="btn btn-primary">Valider</button>
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
