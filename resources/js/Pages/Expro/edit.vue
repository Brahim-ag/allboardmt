<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modifer un employé
            </h2>
        </template>
        <div>
            <div class="container mx-auto grid grid-cols-4 gap-3">
        <div class="col-span-6 sm:col-span-2">
                    <hr />
                    <div class="form-group">
                            <strong>GRADE / FONCTION / POSTE :</strong>
                          <input
                                required
                                type="text"
                                v-model="exproData.grade"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>ADMINISTRATION OU ORGANISME :</strong>
                            <input
                                required
                                type="text"
                                v-model="exproData.admin"
                                class="mt-1 block w-full"
                            />
                        </div>

                        <div class="form-group">
                            <strong>Date de début:</strong>
                            <input
                                required
                                type="date"
                                v-model="exproData.dateStart"
                                class="mt-1 block w-full"
                            />
                        </div>

                      
                        <div class="form-group">
                            <strong>Date de fin:</strong>
                            <input
                                required
                                type="date"
                                v-model="exproData.dateEnd"
                                class="mt-1 block w-full"
                            />
                        </div>
                </div>
            </div>
        </div>

        <button @click="editexpro()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">
            Valider
        </button>
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
            exproData: this.Expro,
            domaine: [],
        };
    },
    props: ["Expro"],
    methods: {
        domainList() {
            axios
                .get("/jsonData/domaine.json")
                .then((response) => (this.domaine = response.data));
        },
        editexpro() {
            axios
                .put(
                    "/api/expro/update/" + this.exproData.id,
                    this.exproData
                )
                .then((response) => {
                    if (response.status == 200) {
                        window.location.href =
                            "/expro/" + this.exproData.employee_id;
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
