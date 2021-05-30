<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Recrutement >
      </h2>
    </template>
    <div class="flex flex-col">
      <div class="flex max-w-8xl mx-auto py-10 sm:px-2 lg:px-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-2 lg:px-8">
          <inertia-link
            :href="`/recrutement/create/${this.employe_id}`"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded"
            >Ajouter</inertia-link
          >
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
                    Grade
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Type de Mouvement
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
                    Numéro d'Acte
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Date de Signature d'Acte
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Date d'Effet d'Acte
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
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Date d'Installation
                  </th>
                  <th
                    scope="col"
                    class="px-2 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider"
                  >
                    Structure d'Affectation
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="(recrutement, index) in recrutements" :key="index">
                  <td>{{ recrutement.grade }}</td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.typem }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.typep }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.number }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.dateEffect }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.dateSignature }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.NumberVisaCf }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.dateVisaCf }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.dateInsta }}
                  </td>
                  <td class="px-2 py-4 whitespace-nowrap">
                    {{ recrutement.structure }}
                  </td>

                  <td
                    scope="col"
                    class="px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                  >
                    <inertia-link :href="`/recrutement/edit/${recrutement.id}`">
                      modifier
                    </inertia-link>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
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
      recrutements: [],
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
        .get("/api/recrutement/getall/" + this.employe_id)
        .then((response) => {
          console.log(response.data);
          this.recrutements = response.data;
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
