<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            ['id' => 1, 'name' => 'Anglo-Saxon, Norse, and Celtic', 'course_type' => 'Undergrad'],
            ['id' => 2, 'name' => 'Architecture', 'course_type' => 'Undergrad'],
            ['id' => 3, 'name' => 'Asian and Middle Eastern Studies', 'course_type' => 'Undergrad'],
            ['id' => 4, 'name' => 'Chemical Engineering (via Engineering)', 'course_type' => 'Undergrad'],
            ['id' => 5, 'name' => 'Chemical Engineering (via NatSci)', 'course_type' => 'Undergrad'],
            ['id' => 6, 'name' => 'Classics', 'course_type' => 'Undergrad'],
            ['id' => 7, 'name' => 'Computer Science', 'course_type' => 'Undergrad'],
            ['id' => 8, 'name' => 'Economics', 'course_type' => 'Undergrad'],
            ['id' => 9, 'name' => 'Education', 'course_type' => 'Undergrad'],
            ['id' => 10, 'name' => 'Engineering', 'course_type' => 'Undergrad'],
            ['id' => 11, 'name' => 'English', 'course_type' => 'Undergrad'],
            ['id' => 12, 'name' => 'Geography', 'course_type' => 'Undergrad'],
            ['id' => 13, 'name' => 'History', 'course_type' => 'Undergrad'],
            ['id' => 14, 'name' => 'History of Art', 'course_type' => 'Undergrad'],
            ['id' => 15, 'name' => 'Human, Social, and Political Sciences', 'course_type' => 'Undergrad'],
            ['id' => 16, 'name' => 'Land Economy', 'course_type' => 'Undergrad'],
            ['id' => 17, 'name' => 'Law', 'course_type' => 'Undergrad'],
            ['id' => 18, 'name' => 'Linguistics', 'course_type' => 'Undergrad'],
            ['id' => 19, 'name' => 'Management Studies (Part II course)', 'course_type' => 'Undergrad'],
            ['id' => 20, 'name' => 'Manufacturing Engineering (Part II course)', 'course_type' => 'Undergrad'],
            ['id' => 21, 'name' => 'Mathematics', 'course_type' => 'Undergrad'],
            ['id' => 22, 'name' => 'Medicine', 'course_type' => 'Undergrad'],
            ['id' => 23, 'name' => 'Medicine (Graduate course)', 'course_type' => 'Undergrad'],
            ['id' => 24, 'name' => 'Modern and Medieval Languages', 'course_type' => 'Undergrad'],
            ['id' => 25, 'name' => 'Music', 'course_type' => 'Undergrad'],
            ['id' => 26, 'name' => 'Natural Sciences (Physical)', 'course_type' => 'Undergrad'],
            ['id' => 27, 'name' => 'Natural Sciences (Biological)', 'course_type' => 'Undergrad'],
            ['id' => 28, 'name' => 'Philosophy', 'course_type' => 'Undergrad'],
            ['id' => 29, 'name' => 'Psychological and Behavioural Sciences', 'course_type' => 'Undergrad'],
            ['id' => 30, 'name' => 'Theology and Religious Studies', 'course_type' => 'Undergrad'],
            ['id' => 31, 'name' => 'Veterinary Medicine', 'course_type' => 'Undergrad'],
            ['id' => 100, 'name' => 'Advanced Chemical Engineering MPhil', 'course_type' => 'Masters'],
            ['id' => 101, 'name' => 'Advanced Computer Science MPhil', 'course_type' => 'Masters'],
            ['id' => 102, 'name' => 'Advanced Subject Teaching Mst', 'course_type' => 'Masters'],
            ['id' => 103, 'name' => 'African Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 104, 'name' => 'American History MPhil', 'course_type' => 'Masters'],
            ['id' => 105, 'name' => 'American Literature MPhil', 'course_type' => 'Masters'],
            ['id' => 106, 'name' => 'Anglo-Saxon, Norse and Celtic MPhil', 'course_type' => 'Masters'],
            ['id' => 107, 'name' => 'Anglo-Saxon, Norse and Celtic PhD', 'course_type' => 'PhD'],
            ['id' => 108, 'name' => 'Animal Health PhD', 'course_type' => 'PhD'],
            ['id' => 109, 'name' => 'Antarctic Studies PhD', 'course_type' => 'PhD'],
            ['id' => 110, 'name' => 'Applied Biological Anthropology MPhil', 'course_type' => 'Masters'],
            ['id' => 111, 'name' => 'Applied Criminology and Police Management Mst', 'course_type' => 'Masters'],
            ['id' => 112, 'name' => 'Applied Criminology, Penology and Management Mst', 'course_type' => 'Masters'],
            ['id' => 113, 'name' => 'Applied Mathematics MASt', 'course_type' => 'Masters'],
            ['id' => 114, 'name' => 'Applied Mathematics and Theoretical Physics PhD', 'course_type' => 'PhD'],
            ['id' => 115, 'name' => 'Archaeological Research MPhil', 'course_type' => 'Masters'],
            ['id' => 116, 'name' => 'Archaeology MPhil', 'course_type' => 'Masters'],
            ['id' => 117, 'name' => 'Archaeology PhD', 'course_type' => 'PhD'],
            ['id' => 118, 'name' => 'Architecture PhD', 'course_type' => 'PhD'],
            ['id' => 119, 'name' => 'Architecture and Urban Design MPhil', 'course_type' => 'Masters'],
            ['id' => 120, 'name' => 'Architecture and Urban Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 121, 'name' => 'Asian and Middle Eastern Studies PhD', 'course_type' => 'PhD'],
            ['id' => 122, 'name' => 'Asian and Middle Eastern Studies (Arabic Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 123, 'name' => 'Asian and Middle Eastern Studies by Research (Arabic Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 124, 'name' => 'Asian and Middle Eastern Studies by Research (Aramaic Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 125, 'name' => 'Asian and Middle Eastern Studies (Chinese Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 126, 'name' => 'Asian and Middle Eastern Studies by Research (Chinese Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 127, 'name' => 'Asian and Middle Eastern Studies (Hebrew Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 128, 'name' => 'Asian and Middle Eastern Studies by Research (Hebrew Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 129, 'name' => 'Asian and Middle Eastern Studies by Research (Japanese Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 130, 'name' => 'Asian and Middle Eastern Studies (Japanese Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 131, 'name' => 'Asian and Middle Eastern Studies (Middle Eastern and Islamic Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 132, 'name' => 'Asian and Middle Eastern Studies by Research (Middle Eastern and Islamic Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 133, 'name' => 'Asian and Middle Eastern Studies by Research (South Asian Studies) MPhil', 'course_type' => 'Masters'],
            ['id' => 134, 'name' => 'Assyriology MPhil', 'course_type' => 'Masters'],
            ['id' => 135, 'name' => 'Astronomy MPhil', 'course_type' => 'Masters'],
            ['id' => 136, 'name' => 'Astronomy PhD', 'course_type' => 'PhD'],
            ['id' => 137, 'name' => 'Astrophysics MASt', 'course_type' => 'Masters'],
            ['id' => 138, 'name' => 'Basic and Translational Neuroscience MPhil', 'course_type' => 'Masters'],
            ['id' => 139, 'name' => 'Biochemistry PhD', 'course_type' => 'PhD'],
            ['id' => 140, 'name' => 'Biological Anthropological Science MPhil', 'course_type' => 'Masters'],
            ['id' => 141, 'name' => 'Biological Anthropology PhD', 'course_type' => 'PhD'],
            ['id' => 142, 'name' => 'Biological Science (Babraham Institute) PhD', 'course_type' => 'PhD'],
            ['id' => 143, 'name' => 'Biological Science (Biochemistry) MPhil', 'course_type' => 'Masters'],
            ['id' => 144, 'name' => 'Biological Science (EBI) PhD', 'course_type' => 'PhD'],
            ['id' => 145, 'name' => 'Biological Science (Genetics) MPhil', 'course_type' => 'Masters'],
            ['id' => 146, 'name' => 'Biological Science (MRC Cognition and Brain Sciences Unit) MPhil', 'course_type' => 'Masters'],
            ['id' => 147, 'name' => 'Biological Science (MRC Cognition and Brain Sciences Unit) PhD', 'course_type' => 'PhD'],
            ['id' => 148, 'name' => 'Biological Science (MRC Laboratory of Molecular Biology) PhD', 'course_type' => 'PhD'],
            ['id' => 149, 'name' => 'Biological Science (MRC Mitochondrial Biology Unit) MPhil', 'course_type' => 'Masters'],
            ['id' => 150, 'name' => 'Biological Science (MRC Mitochondrial Biology Unit) PhD', 'course_type' => 'PhD'],
            ['id' => 151, 'name' => 'Biological Science (Pathology) MPhil', 'course_type' => 'Masters'],
            ['id' => 152, 'name' => 'Biological Science (Pharmacology) MPhil', 'course_type' => 'Masters'],
            ['id' => 153, 'name' => 'Biological Science (Physiology, Development and Neuroscience) MPhil', 'course_type' => 'Masters'],
            ['id' => 154, 'name' => 'Biological Science (Plant Sciences) MPhil', 'course_type' => 'Masters'],
            ['id' => 155, 'name' => 'Biological Science (Psychology) MPhil', 'course_type' => 'Masters'],
            ['id' => 156, 'name' => 'Biological Science (Sanger Institute) MPhil', 'course_type' => 'Masters'],
            ['id' => 157, 'name' => 'Biological Science (Sanger Institute) PhD', 'course_type' => 'PhD'],
            ['id' => 158, 'name' => 'Biological Science (Zoology) MPhil', 'course_type' => 'Masters'],
            ['id' => 159, 'name' => 'Biological Sciences BBSRC DTP PhD', 'course_type' => 'PhD'],
            ['id' => 160, 'name' => 'Biomedical Research MedImmune PhD', 'course_type' => 'PhD'],
            ['id' => 161, 'name' => 'Bioscience Enterprise MPhil', 'course_type' => 'Masters'],
            ['id' => 162, 'name' => 'Biostatistics PhD', 'course_type' => 'PhD'],
            ['id' => 163, 'name' => 'Biotechnology PhD', 'course_type' => 'PhD'],
            ['id' => 164, 'name' => 'Building History Mst', 'course_type' => 'Masters'],
            ['id' => 165, 'name' => 'Business Administration MBA', 'course_type' => 'Masters'],
            ['id' => 166, 'name' => 'Business Administration, Executive EMBA', 'course_type' => 'Masters'],
            ['id' => 167, 'name' => 'Cardiovascular Research MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 168, 'name' => 'Chemical Engineering PhD', 'course_type' => 'PhD'],
            ['id' => 169, 'name' => 'Chemical Engineering and Biotechnology MPhil', 'course_type' => 'Masters'],
            ['id' => 170, 'name' => 'Chemistry MPhil', 'course_type' => 'Masters'],
            ['id' => 171, 'name' => 'Chemistry PhD', 'course_type' => 'PhD'],
            ['id' => 172, 'name' => 'Chemistry (CCDC) PhD', 'course_type' => 'PhD'],
            ['id' => 173, 'name' => 'Classics MPhil', 'course_type' => 'Masters'],
            ['id' => 174, 'name' => 'Classics PhD', 'course_type' => 'PhD'],
            ['id' => 175, 'name' => 'Clinical Biochemistry PhD', 'course_type' => 'PhD'],
            ['id' => 176, 'name' => 'Clinical Medicine Wellcome Trust PhD', 'course_type' => 'PhD'],
            ['id' => 177, 'name' => 'Clinical Medicine (Intensive Care) Mst', 'course_type' => 'Masters'],
            ['id' => 178, 'name' => 'Clinical Medicine (Intensive Care) PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 179, 'name' => 'Clinical Neurosciences PhD', 'course_type' => 'PhD'],
            ['id' => 180, 'name' => 'Clinical Science (Experimental Medicine) MPhil', 'course_type' => 'Masters'],
            ['id' => 181, 'name' => 'Clinical Science (Rare Diseases) MPhil', 'course_type' => 'Masters'],
            ['id' => 182, 'name' => 'Computational Biology MPhil', 'course_type' => 'Masters'],
            ['id' => 183, 'name' => 'Computational Methods for Materials Science EPSRC CDT MPhil + PhD', 'course_type' => 'PhD'],
            ['id' => 184, 'name' => 'Computer Science PhD', 'course_type' => 'PhD'],
            ['id' => 185, 'name' => 'Conservation Leadership MPhil', 'course_type' => 'Masters'],
            ['id' => 186, 'name' => 'Construction Engineering Mst', 'course_type' => 'Masters'],
            ['id' => 187, 'name' => 'Corporate Law MCL', 'course_type' => 'Masters'],
            ['id' => 188, 'name' => 'Creative Writing Mst', 'course_type' => 'Masters'],
            ['id' => 189, 'name' => 'Criminological Research MPhil', 'course_type' => 'Masters'],
            ['id' => 190, 'name' => 'Criminology MPhil', 'course_type' => 'Masters'],
            ['id' => 191, 'name' => 'Criminology PhD', 'course_type' => 'PhD'],
            ['id' => 192, 'name' => 'Development Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 193, 'name' => 'Development Studies PhD', 'course_type' => 'PhD'],
            ['id' => 194, 'name' => 'Developmental Biology MPhil + PhD', 'course_type' => 'PhD'],
            ['id' => 195, 'name' => 'Early Modern History MPhil', 'course_type' => 'Masters'],
            ['id' => 196, 'name' => 'Earth Sciences MPhil', 'course_type' => 'Masters'],
            ['id' => 197, 'name' => 'Earth Sciences PhD', 'course_type' => 'PhD'],
            ['id' => 198, 'name' => 'Economic and Social History MPhil', 'course_type' => 'Masters'],
            ['id' => 199, 'name' => 'Economic Research MPhil', 'course_type' => 'Masters'],
            ['id' => 200, 'name' => 'Economics MPhil', 'course_type' => 'Masters'],
            ['id' => 201, 'name' => 'Economics PhD', 'course_type' => 'PhD'],
            ['id' => 202, 'name' => 'Economics AdvDip', 'course_type' => 'Diploma'],
            ['id' => 203, 'name' => 'Education PhD', 'course_type' => 'PhD'],
            ['id' => 204, 'name' => 'Education EdD', 'course_type' => 'PhD'],
            ['id' => 205, 'name' => 'Education (Child and Adolescent Psychotherapeutic Counselling) MPhil', 'course_type' => 'Masters'],
            ['id' => 206, 'name' => 'Education (Child and Adolescent Psychotherapeutic Counselling) MEd', 'course_type' => 'Masters'],
            ['id' => 207, 'name' => 'Education (Critical Approaches to Children\'s Literature) MPhil', 'course_type' => 'Masters'],
            ['id' => 208, 'name' => 'Education (Critical Approaches to Children\'s Literature) MEd', 'course_type' => 'Masters'],
            ['id' => 209, 'name' => 'Education (Educational Leadership and School Improvement) MPhil', 'course_type' => 'Masters'],
            ['id' => 210, 'name' => 'Education (Educational Leadership and School Improvement) MEd', 'course_type' => 'Masters'],
            ['id' => 211, 'name' => 'Education (Educational Research) MPhil', 'course_type' => 'Masters'],
            ['id' => 212, 'name' => 'Education (Educational Research) MEd', 'course_type' => 'Masters'],
            ['id' => 213, 'name' => 'Education (Globalisation and International Development) MPhil', 'course_type' => 'Masters'],
            ['id' => 214, 'name' => 'Education (Mathematics Education) MPhil', 'course_type' => 'Masters'],
            ['id' => 215, 'name' => 'Education (Mathematics Education) MEd', 'course_type' => 'Masters'],
            ['id' => 216, 'name' => 'Education (Primary Education) MPhil', 'course_type' => 'Masters'],
            ['id' => 217, 'name' => 'Education (Primary Education) MEd', 'course_type' => 'Masters'],
            ['id' => 218, 'name' => 'Education (Psychology and Education) MPhil', 'course_type' => 'Masters'],
            ['id' => 219, 'name' => 'Education (Psychology and Education) MEd', 'course_type' => 'Masters'],
            ['id' => 220, 'name' => 'Education (Research in Second Language Education) MPhil', 'course_type' => 'Masters'],
            ['id' => 221, 'name' => 'Education (Research in Second Language Education) MEd', 'course_type' => 'Masters'],
            ['id' => 222, 'name' => 'Education (Researching Practice) MEd', 'course_type' => 'Masters'],
            ['id' => 223, 'name' => 'Education (Science Teacher Researchers and Practitioners) MEd', 'course_type' => 'Masters'],
            ['id' => 224, 'name' => 'Educational Studies PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 225, 'name' => 'Educational Studies PGACert', 'course_type' => 'Certificate/Award'],
            ['id' => 226, 'name' => 'Educational Studies PGA', 'course_type' => 'Certificate/Award'],
            ['id' => 227, 'name' => 'Educational Studies ICEPGDip', 'course_type' => 'Diploma'],
            ['id' => 228, 'name' => 'Educational Studies: Contemporary Issues in Music Education PGA', 'course_type' => 'Certificate/Award'],
            ['id' => 229, 'name' => 'Educational Studies: Dialogic Teaching PGA', 'course_type' => 'Certificate/Award'],
            ['id' => 230, 'name' => 'Educational Studies: Introduction to Child and Adolescent Psychotherapeutic Counselling PGA', 'course_type' => 'Certificate/Award'],
            ['id' => 231, 'name' => 'Educational Studies: Teaching Advanced Mathematics PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 232, 'name' => 'Educational Studies: Understanding Shakespeare through Performance PGA', 'course_type' => 'Certificate/Award'],
            ['id' => 233, 'name' => 'Egyptology MPhil', 'course_type' => 'Masters'],
            ['id' => 234, 'name' => 'Energy Technologies MPhil', 'course_type' => 'Masters'],
            ['id' => 235, 'name' => 'Engineering MPhil', 'course_type' => 'Masters'],
            ['id' => 236, 'name' => 'Engineering PhD', 'course_type' => 'PhD'],
            ['id' => 237, 'name' => 'Engineering for Sustainable Development MPhil', 'course_type' => 'Masters'],
            ['id' => 238, 'name' => 'English (18th Century and Romantic Literature) PhD', 'course_type' => 'PhD'],
            ['id' => 239, 'name' => 'English (American Literature) PhD', 'course_type' => 'PhD'],
            ['id' => 240, 'name' => 'English (Criticism and Culture) PhD', 'course_type' => 'PhD'],
            ['id' => 241, 'name' => 'English (Medieval Literature) PhD', 'course_type' => 'PhD'],
            ['id' => 242, 'name' => 'English (Modern and Contemporary Literature) PhD', 'course_type' => 'PhD'],
            ['id' => 243, 'name' => 'English (Renaissance Literature) PhD', 'course_type' => 'PhD'],
            ['id' => 244, 'name' => 'English Literature MLitt', 'course_type' => 'Masters'],
            ['id' => 245, 'name' => 'English Studies: 18th Century and Romantic Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 246, 'name' => 'English Studies: Criticism and Culture MPhil', 'course_type' => 'Masters'],
            ['id' => 247, 'name' => 'English Studies: Modern and Contemporary Literature MPhil', 'course_type' => 'Masters'],
            ['id' => 248, 'name' => 'Entrepreneurship ICEPGDip', 'course_type' => 'Diploma'],
            ['id' => 249, 'name' => 'Environmental Policy MPhil', 'course_type' => 'Masters'],
            ['id' => 250, 'name' => 'Epidemiology MPhil', 'course_type' => 'Masters'],
            ['id' => 251, 'name' => 'European, Latin American and Comparative Literatures and Cultures MPhil', 'course_type' => 'Masters'],
            ['id' => 252, 'name' => 'Film and Screen Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 253, 'name' => 'Film and Screen Studies PhD', 'course_type' => 'PhD'],
            ['id' => 254, 'name' => 'Finance MPhil', 'course_type' => 'Masters'],
            ['id' => 255, 'name' => 'Finance MFin', 'course_type' => 'Masters'],
            ['id' => 256, 'name' => 'Finance and Economics MPhil', 'course_type' => 'Masters'],
            ['id' => 257, 'name' => 'French PhD', 'course_type' => 'PhD'],
            ['id' => 258, 'name' => 'Future Infrastructure and Built Environment EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 259, 'name' => 'Gas Turbine Aerodynamics EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 260, 'name' => 'Genetics PhD', 'course_type' => 'PhD'],
            ['id' => 261, 'name' => 'Genomic Medicine MPhil', 'course_type' => 'Masters'],
            ['id' => 262, 'name' => 'Genomic Medicine Mst', 'course_type' => 'Masters'],
            ['id' => 263, 'name' => 'Genomic Medicine PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 264, 'name' => 'Genomic Medicine PGDip', 'course_type' => 'Diploma'],
            ['id' => 265, 'name' => 'Geographical Research MPhil', 'course_type' => 'Masters'],
            ['id' => 266, 'name' => 'Geography MPhil', 'course_type' => 'Masters'],
            ['id' => 267, 'name' => 'Geography PhD', 'course_type' => 'PhD'],
            ['id' => 268, 'name' => 'German PhD', 'course_type' => 'PhD'],
            ['id' => 269, 'name' => 'Graphene Technology EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 270, 'name' => 'History PhD', 'course_type' => 'PhD'],
            ['id' => 271, 'name' => 'History Mst', 'course_type' => 'Masters'],
            ['id' => 272, 'name' => 'History and Philosophy of Science PhD', 'course_type' => 'PhD'],
            ['id' => 273, 'name' => 'History and Philosophy of Science and Medicine MPhil', 'course_type' => 'Masters'],
            ['id' => 274, 'name' => 'History of Art PhD', 'course_type' => 'PhD'],
            ['id' => 275, 'name' => 'History of Art and Architecture MPhil', 'course_type' => 'Masters'],
            ['id' => 276, 'name' => 'Howard Huges Medical Institute PhD', 'course_type' => 'PhD'],
            ['id' => 277, 'name' => 'Human Evolutionary Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 278, 'name' => 'Industrial Systems, Manufacture, and Management MPhil', 'course_type' => 'Masters'],
            ['id' => 279, 'name' => 'Innovation, Strategy and Organisation MPhil', 'course_type' => 'Masters'],
            ['id' => 280, 'name' => 'Integrated Photonic and Electronic Systems EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 281, 'name' => 'Interdisciplinary Design for the Built Environment Mst', 'course_type' => 'Masters'],
            ['id' => 282, 'name' => 'International Law PGDip', 'course_type' => 'Diploma'],
            ['id' => 283, 'name' => 'International Relations and Politics MPhil', 'course_type' => 'Masters'],
            ['id' => 284, 'name' => 'Italian PhD', 'course_type' => 'PhD'],
            ['id' => 285, 'name' => 'Land Economy MPhil', 'course_type' => 'Masters'],
            ['id' => 286, 'name' => 'Land Economy PhD', 'course_type' => 'PhD'],
            ['id' => 287, 'name' => 'Land Economy Research MPhil', 'course_type' => 'Masters'],
            ['id' => 288, 'name' => 'Latin American Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 289, 'name' => 'Latin American Studies PhD', 'course_type' => 'PhD'],
            ['id' => 290, 'name' => 'Law PhD', 'course_type' => 'PhD'],
            ['id' => 291, 'name' => 'Law MLitt', 'course_type' => 'Masters'],
            ['id' => 292, 'name' => 'Law LLM', 'course_type' => 'Masters'],
            ['id' => 293, 'name' => 'Legal Studies PGDip', 'course_type' => 'Diploma'],
            ['id' => 294, 'name' => 'Linguistics: Theoretical and Applied Linguistics PhD', 'course_type' => 'PhD'],
            ['id' => 295, 'name' => 'Machine Learning, Speech and Language Technology MPhil', 'course_type' => 'Masters'],
            ['id' => 296, 'name' => 'Management MPhil', 'course_type' => 'Masters'],
            ['id' => 297, 'name' => 'Management Studies PhD', 'course_type' => 'PhD'],
            ['id' => 298, 'name' => 'Management Studies MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 299, 'name' => 'MASter of Music MMus', 'course_type' => 'Masters'],
            ['id' => 300, 'name' => 'Materials Science MASt', 'course_type' => 'Masters'],
            ['id' => 301, 'name' => 'Materials Science and Metallurgy MPhil', 'course_type' => 'Masters'],
            ['id' => 302, 'name' => 'Materials Science and Metallurgy PhD', 'course_type' => 'PhD'],
            ['id' => 303, 'name' => 'Mathematical Analysis PhD', 'course_type' => 'PhD'],
            ['id' => 304, 'name' => 'Mathematical Genomics and Medicine PhD', 'course_type' => 'PhD'],
            ['id' => 305, 'name' => 'Mathematical Statistics MASt', 'course_type' => 'Masters'],
            ['id' => 306, 'name' => 'MD (Doctor of Medicine) MD', 'course_type' => 'PhD'],
            ['id' => 307, 'name' => 'Medical Education PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 308, 'name' => 'Medical Science (CIMR) MPhil', 'course_type' => 'Masters'],
            ['id' => 309, 'name' => 'Medical Science (CIMR) PhD', 'course_type' => 'PhD'],
            ['id' => 310, 'name' => 'Medical Science (CIMR) MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 311, 'name' => 'Medical Science (Clinical Biochemistry) MPhil', 'course_type' => 'Masters'],
            ['id' => 312, 'name' => 'Medical Science (Clinical Neurosciences) MPhil', 'course_type' => 'Masters'],
            ['id' => 313, 'name' => 'Medical Science (CRUKCI) MPhil', 'course_type' => 'Masters'],
            ['id' => 314, 'name' => 'Medical Science (CRUKCI) PhD', 'course_type' => 'PhD'],
            ['id' => 315, 'name' => 'Medical Science (Infection, Immunity and Inflammation) MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 316, 'name' => 'Medical Science (Medicine) MPhil', 'course_type' => 'Masters'],
            ['id' => 317, 'name' => 'Medical Science (MRC Cancer Unit) MPhil', 'course_type' => 'Masters'],
            ['id' => 318, 'name' => 'Medical Science (MRC Cancer Unit) PhD', 'course_type' => 'PhD'],
            ['id' => 319, 'name' => 'Medical Science (MRC Epidemiology Unit) PhD', 'course_type' => 'PhD'],
            ['id' => 320, 'name' => 'Medical Science (Obstetrics and Gynaecology) MPhil', 'course_type' => 'Masters'],
            ['id' => 321, 'name' => 'Medical Science (Oncology) MPhil', 'course_type' => 'Masters'],
            ['id' => 322, 'name' => 'Medical Science (Psychiatry) MPhil', 'course_type' => 'Masters'],
            ['id' => 323, 'name' => 'Medical Science (Radiology) MPhil', 'course_type' => 'Masters'],
            ['id' => 324, 'name' => 'Medical Science (Surgery) MPhil', 'course_type' => 'Masters'],
            ['id' => 325, 'name' => 'Medicine PhD', 'course_type' => 'PhD'],
            ['id' => 326, 'name' => 'Medicine MRC/Sackler Fund PhD', 'course_type' => 'PhD'],
            ['id' => 327, 'name' => 'Medieval and Renaissance Literature MPhil', 'course_type' => 'Masters'],
            ['id' => 328, 'name' => 'Medieval History MPhil', 'course_type' => 'Masters'],
            ['id' => 329, 'name' => 'Metabolic and Cardiovascular Disease Wellcome Trust MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 330, 'name' => 'Micro and Nanotechnology Enterprise MPhil', 'course_type' => 'Masters'],
            ['id' => 331, 'name' => 'Modern British History MPhil', 'course_type' => 'Masters'],
            ['id' => 332, 'name' => 'Modern European History MPhil', 'course_type' => 'Masters'],
            ['id' => 333, 'name' => 'Modern South Asian Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 334, 'name' => 'Multi-disciplinary Gender Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 335, 'name' => 'Multi-disciplinary Gender Studies PhD', 'course_type' => 'PhD'],
            ['id' => 336, 'name' => 'Music PhD', 'course_type' => 'PhD'],
            ['id' => 337, 'name' => 'Music Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 338, 'name' => 'Nanoscience and Nanotechnology EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 339, 'name' => 'National Institutes of Health Oxford/Cambridge Programme NIH Ox/Cam PhD', 'course_type' => 'PhD'],
            ['id' => 340, 'name' => 'Nuclear Energy MPhil', 'course_type' => 'Masters'],
            ['id' => 341, 'name' => 'Obstetrics and Gynaecology PhD', 'course_type' => 'PhD'],
            ['id' => 342, 'name' => 'Oncology PhD', 'course_type' => 'PhD'],
            ['id' => 343, 'name' => 'Paediatrics PhD', 'course_type' => 'PhD'],
            ['id' => 344, 'name' => 'Pathology PhD', 'course_type' => 'PhD'],
            ['id' => 345, 'name' => 'Pharmacology PhD', 'course_type' => 'PhD'],
            ['id' => 346, 'name' => 'Philosophy MPhil', 'course_type' => 'Masters'],
            ['id' => 347, 'name' => 'Philosophy PhD', 'course_type' => 'PhD'],
            ['id' => 348, 'name' => 'Physics MPhil', 'course_type' => 'Masters'],
            ['id' => 349, 'name' => 'Physics PhD', 'course_type' => 'PhD'],
            ['id' => 350, 'name' => 'Physics MASt', 'course_type' => 'Masters'],
            ['id' => 351, 'name' => 'Physiology, Development and Neuroscience PhD', 'course_type' => 'PhD'],
            ['id' => 352, 'name' => 'Planning, Growth and Regeneration MPhil', 'course_type' => 'Masters'],
            ['id' => 353, 'name' => 'Plant Sciences PhD', 'course_type' => 'PhD'],
            ['id' => 354, 'name' => 'Polar Studies (Scott Polar Research Institute) MPhil', 'course_type' => 'Masters'],
            ['id' => 355, 'name' => 'Polar Studies (Scott Polar Research Institute) PhD', 'course_type' => 'PhD'],
            ['id' => 356, 'name' => 'Political Thought and Intellectual History MPhil', 'course_type' => 'Masters'],
            ['id' => 357, 'name' => 'Politics and International Studies PhD', 'course_type' => 'PhD'],
            ['id' => 358, 'name' => 'Portuguese PhD', 'course_type' => 'PhD'],
            ['id' => 359, 'name' => 'Postgraduate Diploma in Educational Studies: Child and Adolescent Psychotherapeutic Counselling ICEPGDip', 'course_type' => 'Diploma'],
            ['id' => 360, 'name' => 'Primary Care Research MPhil', 'course_type' => 'Masters'],
            ['id' => 361, 'name' => 'Professional Practice in Architecture - Not yet open PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 362, 'name' => 'Psychiatry PhD', 'course_type' => 'PhD'],
            ['id' => 363, 'name' => 'Psychology PhD', 'course_type' => 'PhD'],
            ['id' => 364, 'name' => 'Public Health MPhil', 'course_type' => 'Masters'],
            ['id' => 365, 'name' => 'Public Health and Primary Care PhD', 'course_type' => 'PhD'],
            ['id' => 366, 'name' => 'Public Policy MPhil', 'course_type' => 'Masters'],
            ['id' => 367, 'name' => 'Pure Mathematics MASt', 'course_type' => 'Masters'],
            ['id' => 368, 'name' => 'Pure Mathematics and Mathematical Statistics PhD', 'course_type' => 'PhD'],
            ['id' => 369, 'name' => 'Radiology PhD', 'course_type' => 'PhD'],
            ['id' => 370, 'name' => 'Real Estate Mst', 'course_type' => 'Masters'],
            ['id' => 371, 'name' => 'Real Estate Finance MPhil', 'course_type' => 'Masters'],
            ['id' => 372, 'name' => 'Scientific Computing MPhil', 'course_type' => 'Masters'],
            ['id' => 373, 'name' => 'Sensor Technologies and Applications EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 374, 'name' => 'Slavonic Studies PhD', 'course_type' => 'PhD'],
            ['id' => 375, 'name' => 'Social and Developmental Psychology MPhil', 'course_type' => 'Masters'],
            ['id' => 376, 'name' => 'Social Anthropology MPhil', 'course_type' => 'Masters'],
            ['id' => 377, 'name' => 'Social Anthropology PhD', 'course_type' => 'PhD'],
            ['id' => 378, 'name' => 'Social Anthropology MRes', 'course_type' => 'Masters'],
            ['id' => 379, 'name' => 'Social Innovation Mst', 'course_type' => 'Masters'],
            ['id' => 380, 'name' => 'Sociology PhD', 'course_type' => 'PhD'],
            ['id' => 381, 'name' => 'Sociology (Modern Society and Global Transformations) MPhil', 'course_type' => 'Masters'],
            ['id' => 382, 'name' => 'Sociology (Political and Economic Sociology) MPhil', 'course_type' => 'Masters'],
            ['id' => 383, 'name' => 'Sociology (The Sociology of Media and Culture) MPhil', 'course_type' => 'Masters'],
            ['id' => 384, 'name' => 'Sociology (The Sociology of Reproduction) MPhil', 'course_type' => 'Masters'],
            ['id' => 385, 'name' => 'Spanish PhD', 'course_type' => 'PhD'],
            ['id' => 386, 'name' => 'Stem Cell Biology Wellcome Trust MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 387, 'name' => 'Strategy, Marketing and Operations MPhil', 'course_type' => 'Masters'],
            ['id' => 388, 'name' => 'Surgery PhD', 'course_type' => 'PhD'],
            ['id' => 389, 'name' => 'Sustainability Leadership Mst', 'course_type' => 'Masters'],
            ['id' => 390, 'name' => 'Sustainable Business PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 391, 'name' => 'Sustainable Business PGDip', 'course_type' => 'Diploma'],
            ['id' => 392, 'name' => 'Technology Policy MPhil', 'course_type' => 'Masters'],
            ['id' => 393, 'name' => 'Theology and Religious Studies MPhil', 'course_type' => 'Masters'],
            ['id' => 394, 'name' => 'Theology and Religious Studies PhD', 'course_type' => 'PhD'],
            ['id' => 395, 'name' => 'Theology and Religious Studies MLitt', 'course_type' => 'Masters'],
            ['id' => 396, 'name' => 'Theology and Religious Studies CPGS', 'course_type' => 'Certificate/Award'],
            ['id' => 397, 'name' => 'Theology and Religious Studies AdvDip', 'course_type' => 'Diploma'],
            ['id' => 398, 'name' => 'Theoretical and Applied Linguistics MPhil', 'course_type' => 'Masters'],
            ['id' => 399, 'name' => 'Ultra Precision Engineering EPSRC CDT MRes + PhD', 'course_type' => 'PhD'],
            ['id' => 400, 'name' => 'Sustainable Value Chains PGCert', 'course_type' => 'Certificate/Award'],
            ['id' => 401, 'name' => 'Veterinary Science MPhil', 'course_type' => 'Masters'],
            ['id' => 402, 'name' => 'Veterinary Science PhD', 'course_type' => 'PhD'],
            ['id' => 403, 'name' => 'World History MPhil', 'course_type' => 'Masters'],
            ['id' => 404, 'name' => 'Zoology PhD', 'course_type' => 'PhD'],
            ['id' => 405, 'name' => 'None', 'course_type' => 'Others'],
        ]);
    }
}
