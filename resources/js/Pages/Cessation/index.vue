<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Cessation
      </h2>
    </template>
    <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
        <div
          class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
        >
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Motif
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Type d'Acte
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Date d'Effet
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Numéro d'Acte
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Date de Signature
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Numéro de Visa CF
                </th>
                <th
                  scope="col"
                  class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                >
                  Date de Visa CF
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="(cessation, index) in cessations" :key="index">
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.motif }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.typeA }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.dateA }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.nRef }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.dateSign }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.numberCf }}
                </td>
                <td class="px-2 py-4 whitespace-nowrap">
                  {{ cessation.dateEffeCF }}
                </td>

                 <td class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-2 rounded">
                        <inertia-link :href="`/cessation/edit/${cessation.id}`">
                    modifier
                  </inertia-link>
                </td>
              </tr>

              <inertia-link :href="`/antecejudi/create/${this.employe_id}`"
                >Ajouter</inertia-link
              >
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="max-w-7xl mx-auto py-10 sm:px-2 lg:px-8">
      <table class="min-w-full divide-y divide-gray-200"></table>
      <inertia-link :href="`/cessation/create/${this.employe_id}`"
        >Ajouter</inertia-link
      >
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
      cessations: [],
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
        .get("/api/cessation/getall/" + this.employe_id)
        .then((response) => {
          console.log(response.data);
          this.cessations = response.data;
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
