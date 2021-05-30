<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                antecejudis
            </h2>
        </template>
        <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
            <div
                class="
                    py-2
                    align-middle
                    inline-block
                    min-w-full
                    sm:px-2
                    lg:px-8
                "
            >
                <div
                    class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                    "
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="
                                        px-2
                                        py-3
                                        text-left text-sm
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Affaire
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-2
                                        py-3
                                        text-left text-sm
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Qualité
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-2
                                        py-3
                                        text-left text-sm
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Jugement Prononcé
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-2
                                        py-3
                                        text-left text-sm
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    Instance Judiciaire
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr
                                v-for="(antecejudi, index) in antecejudis"
                                :key="index"
                            >
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ antecejudi.affaire }}
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ antecejudi.quality }}
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ antecejudi.jugement }}
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ antecejudi.instance }}
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    <inertia-link class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded"
                                        :href="`/antecejudi/edit/${antecejudi.id}`"
                                    >
                                        modifier
                                    </inertia-link>
                                </td>
                            </tr>
                        </tbody>

                        <inertia-link
                            :href="`/antecejudi/create/${this.employe_id}`"
                            >Ajouter</inertia-link
                        >
                    </table>
                </div>
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
    props: ["employe_id"],
    data() {
        return {
            antecejudis: [],
        };
    },
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
    methods: {
        getAll() {
            axios
                .get("/api/antecejudi/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.antecejudis = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
