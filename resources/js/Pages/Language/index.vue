<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Languages
      </h2>
    </template>
    <div class="max-w-9xl mx-auto py-10 sm:px-2 lg:px-8">
      <div
        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
      >
        <table class="table-auto min-w-full divide-y divide-gray-200">
          <thead>
          <tr>
            <th>Langue</th>
            <th>Niveau</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(language, index) in languages" :key="index">
            <td class="px-2 py-4 whitespace-nowrap text-sm">
              {{ language.language }}
            </td>
            <td class="px-2 py-4 whitespace-nowrap">{{ language.level }}</td>

            <td>
              <inertia-link
                :href="`/language/edit/${language.id}`"
                class="
                  bg-green-500
                  hover:bg-green-700
                  text-white
                  font-bold
                  py-2
                  px-2
                  rounded
                "
              >
                Modifier
              </inertia-link>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <inertia-link
        :href="`/language/create/${this.employe_id}`"
        class="
          bg-blue-500
          hover:bg-blue-700
          text-white
          font-bold
          py-2
          px-2
          rounded
        "
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
      languages: [],
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
        .get("/api/language/getall/" + this.employe_id)
        .then((response) => {
          this.languages = response.data;
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
