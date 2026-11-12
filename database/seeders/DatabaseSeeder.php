<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@umadyechem.com'],
            [
                'name' => 'Uma Dye Chem Admin',
                'password' => Hash::make('admin123'),
            ]
        );

        // Site Settings
        $defaultSettings = [
            'company_name' => 'Uma Dye Chem',
            'company_tagline' => 'Pioneer Manufacturers & Exporters of Ammonium Bisulphite Since 1984',
            'phone' => '+91-2767-255893',
            'phone_alt' => '+91-2767-253749',
            'mobile' => '+91-98250 12345',
            'whatsapp_number' => '919825012345',
            'email' => 'umadyechem.industries@gmail.com',
            'address' => 'Survey No. 1283/1291, Unjha-Unava Highway, Behind National Federation, Unava, Unjha, Mehsana, Gujarat - 384160, India',
            'postal_address' => 'Post Box No. 155, Unava - Unjha Highway, Unava, Gujarat, India',
            'working_hours' => 'Monday - Saturday: 9:00 AM - 6:30 PM (IST)',
            'years_in_business' => '40+',
            'meta_title' => 'Uma Dye Chem | Ammonium Bisulphite Manufacturer in Gujarat, India',
            'meta_description' => 'Leading manufacturer & global exporter of Ammonium Bisulphite 70%, 65%, 60%, 40%, Food Grade, Oxygen Scavenger & Nickel/Cobalt catalyzed solutions based in Unjha, Gujarat, India.',
        ];

        foreach ($defaultSettings as $key => $val) {
            SiteSetting::set($key, $val);
        }

        // All 10 Official Products
        $products = [
            [
                'name' => 'Ammonium Bisulphite - 70%',
                'slug' => 'ammonium-bisulphite-70',
                'category' => 'Ammonium Bisulphite Solutions',
                'short_description' => 'Highest concentration (70% w/w) Ammonium Bisulphite aqueous solution. Engineered for maximum efficiency as an industrial reducing agent and dissolved oxygen scavenger.',
                'description' => "Ammonium Bisulphite 70% is Uma Dye Chem's highest-concentration liquid formulation designed for critical industrial applications demanding maximum active strength and minimal dosage volume.

Manufactured in our state-of-the-art facility in Unava, Gujarat, this solution is refined under stringent reaction controls to guarantee low iron content, high SO2 equivalent, and outstanding chemical stability.

Key Advantages:
• Maximum active concentration minimizes shipping volumes and storage footprint
• Fast dissolved oxygen scavenging kinetics
• High purity formulation with negligible heavy metal traces
• Completely miscible in water at all proportions",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Clear, colorless to pale citrine yellow liquid',
                'grade' => 'Industrial / Technical Grade',
                'concentration' => '70.0% ± 2.0% (w/w)',
                'ph_value' => '4.0 - 5.5',
                'specific_gravity' => '1.38 - 1.42 @ 20°C',
                'so2_content' => '43.0% - 46.0%',
                'packaging' => '50 kg & 250 kg HDPE Drums, 1000 Litre IBC Tanks, and Road Tanker loads',
                'applications' => "Dissolved Oxygen Scavenger in Oil & Gas waterflooding and drilling muds
Boiler feed water deoxygenation and corrosion inhibitor
Dechlorination agent for municipal and industrial wastewater
Bleaching and antichlor in textile & dye chemical synthesis
Pulp & Paper processing and lignin sulphonation
Intermediate in specialty chemical synthesis",
                'industries' => "Oil & Gas Exploration & Production
Industrial Water & Wastewater Treatment
Textile Processing & Dye Intermediates
Pulp & Paper Manufacturing
Chemical Manufacturing & Processing
Thermal Power Plants",
                'specifications_json' => [
                    'Assay (as NH4HSO3)' => '70.0% Min',
                    'Specific Gravity @ 20°C' => '1.38 - 1.42',
                    'pH (neat)' => '4.0 - 5.5',
                    'Equivalent SO2 Content' => '43.5% - 46.0%',
                    'Iron Content (as Fe)' => '< 5 ppm (0.0005%)',
                    'Heavy Metals (as Pb)' => '< 10 ppm',
                    'Free Sulfur Dioxide' => 'Controlled specification',
                    'Physical State' => 'Aqueous Liquid',
                ],
                'meta_title' => 'Ammonium Bisulphite 70% Manufacturer & Exporter | Uma Dye Chem India',
                'meta_description' => 'Buy high-purity Ammonium Bisulphite 70% solution from top Indian manufacturer Uma Dye Chem. Ideal for oilfield oxygen scavenging, water treatment & textiles.',
                'meta_keywords' => 'Ammonium Bisulphite 70, ABS 70%, chemical manufacturer India, oxygen scavenger, CAS 10192-30-0, Gujarat chemicals',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Ammonium Bisulphite - 65%',
                'slug' => 'ammonium-bisulphite-65',
                'category' => 'Ammonium Bisulphite Solutions',
                'short_description' => 'Industrial grade 65% concentration Ammonium Bisulphite solution. Widely favored for oilfield deoxygenation, dye manufacturing, and wastewater dechlorination.',
                'description' => "Ammonium Bisulphite 65% is an optimal-balance industrial solution renowned for versatility and easy handling. It offers reliable reducing power while maintaining stability over wide ambient temperature ranges.

Produced to rigorous international standards, it serves as a key raw material and chemical processing aid across global supply chains.",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Clear, light yellow liquid, free from suspended matter',
                'grade' => 'Technical / Industrial Grade',
                'concentration' => '65.0% Min (w/w)',
                'ph_value' => '4.0 - 5.0',
                'specific_gravity' => '1.36 - 1.39 @ 20°C',
                'so2_content' => '40.0% - 42.5%',
                'packaging' => '50 kg & 250 kg HDPE Drums, 1000L IBC Totes, Bulk Tanker',
                'applications' => "Oxygen scavenging in oilfield injection water & pipelines
Dechlorination of industrial effluents before discharge
Antichlor agent in textile wet processing
Dye intermediate synthesis
Corrosion protection in closed cooling water systems",
                'industries' => "Oil & Gas Offshore/Onshore
Textile & Apparel Chemicals
Effluent & Sewage Treatment
Chemical Synthesis
Fertilizer & Agrochem Formulations",
                'specifications_json' => [
                    'Assay (as NH4HSO3)' => '65.0% Min',
                    'Specific Gravity @ 20°C' => '1.36 - 1.39',
                    'pH (as is)' => '4.0 - 5.0',
                    'SO2 Equivalent' => '40.0% - 42.5%',
                    'Iron (Fe)' => '< 10 ppm',
                    'Clarity' => 'Completely Clear',
                ],
                'meta_title' => 'Ammonium Bisulphite 65% Solution Supplier | Uma Dye Chem',
                'meta_description' => 'Ammonium Bisulphite 65% liquid solution manufactured in Gujarat by Uma Dye Chem. Bulk export packaging in drums, IBC totes & tankers.',
                'meta_keywords' => 'Ammonium Bisulphite 65, ABS 65%, dechlorination chemical, oilfield chemical supplier Gujarat',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Ammonium Bisulphite - 60%',
                'slug' => 'ammonium-bisulphite-60',
                'category' => 'Ammonium Bisulphite Solutions',
                'short_description' => 'Standard 60% active Ammonium Bisulphite solution. Highly stable, reliable, and cost-effective for general industrial reducing and water processing needs.',
                'description' => "Ammonium Bisulphite 60% represents an economical standard formulation for water treatment plants, textile mills, and chemical synthesizing units requiring dependable reducing agents.

Provides stable active SO2 content without risk of crystallization in standard warehouse environments.",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Clear, pale yellow liquid with faint SO2 aroma',
                'grade' => 'Technical Grade',
                'concentration' => '60.0% Min (w/w)',
                'ph_value' => '4.0 - 5.5',
                'specific_gravity' => '1.33 - 1.36 @ 20°C',
                'so2_content' => '37.0% - 39.5%',
                'packaging' => '250 kg HDPE Drums, 1000L IBC Containers',
                'applications' => "Municipal water dechlorination
Effluent chlorine neutralization
Industrial boiler water treatment
Textile dye fixing and bleaching agent
Pulp washing and bleaching auxiliary",
                'industries' => "Water Treatment Utilities
Textile Processing
Pulp and Paper
Chemical Intermediates",
                'specifications_json' => [
                    'Assay (as NH4HSO3)' => '60.0% Min',
                    'Specific Gravity @ 20°C' => '1.33 - 1.36',
                    'pH Value' => '4.0 - 5.5',
                    'SO2 Content' => '37.0% - 39.5%',
                    'Insoluble Matter' => 'Nil',
                ],
                'meta_title' => 'Ammonium Bisulphite 60% Liquid | Uma Dye Chem',
                'meta_description' => 'Top manufacturer of Ammonium Bisulphite 60% aqueous solution in India. Technical specifications, MSDS, and bulk quotes.',
                'meta_keywords' => 'Ammonium Bisulphite 60%, ABS 60, water treatment reducing agent, chemical exporter',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Ammonium Bisulphite - 40%',
                'slug' => 'ammonium-bisulphite-40',
                'category' => 'Ammonium Bisulphite Solutions',
                'short_description' => 'Diluted 40% active concentration Ammonium Bisulphite solution for precise automated chemical dosing and sensitive water systems.',
                'description' => "Ammonium Bisulphite 40% is ready-to-dose for industrial facilities that require dilute concentrations to ensure precise volumetric pump dosing without manual dilution on-site.

Widely utilized in municipal waterworks, cooling towers, and environmental compliance systems.",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Clear, colorless to very faint yellow liquid',
                'grade' => 'Commercial / Technical Grade',
                'concentration' => '40.0% ± 1.5% (w/w)',
                'ph_value' => '4.2 - 5.5',
                'specific_gravity' => '1.24 - 1.28 @ 20°C',
                'so2_content' => '24.5% - 26.5%',
                'packaging' => '50 kg Carboys, 250 kg Drums, 1000L IBCs',
                'applications' => "Automated dechlorination systems
RO membrane feed water dechlorination
Cooling tower chemical conditioning
Wastewater sulfide/residual chlorine neutralization",
                'industries' => "Water Treatment & RO Plants
Power & Utilities
Municipal Infrastructure",
                'specifications_json' => [
                    'Active Content' => '40.0% ± 1.5%',
                    'Specific Gravity' => '1.24 - 1.28',
                    'pH' => '4.2 - 5.5',
                    'Appearance' => 'Clear liquid',
                ],
                'meta_title' => 'Ammonium Bisulphite 40% Solution | Uma Dye Chem',
                'meta_description' => 'Ammonium Bisulphite 40% dilute solution for RO feed water dechlorination and automated dosing systems. High purity by Uma Dye Chem.',
                'meta_keywords' => 'Ammonium Bisulphite 40%, RO dechlorination, water treatment chemicals',
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 4,
            ],
            [
                'name' => 'Ammonium Bisulphite Food Grade',
                'slug' => 'ammonium-bisulphite-food-grade',
                'category' => 'Food Grade Chemicals',
                'short_description' => 'Ultra-pure food-grade Ammonium Bisulphite compliant with food safety regulations. Critical additive for caramel color production, sugar processing, and preservation.',
                'description' => "Ammonium Bisulphite Food Grade is manufactured under rigorous sanitary conditions in dedicated processing lines with extra purification steps to comply with food safety standards.

It is predominantly utilized in the manufacturing of Class III & Class IV Ammonia Caramel Colorings used globally in beverages, confectionery, soy sauce, and bakery products. It also acts as an antioxidant and enzymatic browning inhibitor.",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Water-white to pale yellow sparkling clear liquid',
                'grade' => 'Food Grade / E150 Reactant Quality',
                'concentration' => '60.0% - 65.0% (w/w)',
                'ph_value' => '4.0 - 5.0',
                'specific_gravity' => '1.36 - 1.40 @ 20°C',
                'so2_content' => '39.0% - 43.0%',
                'packaging' => 'Food-grade dedicated virgin HDPE 250 kg Drums and 1000L IBC Totes',
                'applications' => "Caramel Color (Class III Ammonia Caramel & Class IV Sulfite Ammonia Caramel)
Sugar refining and juice clarification
Starch and glucose processing
Antioxidant and anti-browning agent in food preservation
Brewing and fermentation processing",
                'industries' => "Food & Beverage Manufacturing
Caramel Color Production
Sugar Mills & Refineries
Brewing & Distilleries
Starch & Derivative Processing",
                'specifications_json' => [
                    'Grade' => 'Food Grade',
                    'Assay (as NH4HSO3)' => '60.0% - 65.0%',
                    'Arsenic (as As)' => '< 1.0 ppm',
                    'Lead (as Pb)' => '< 2.0 ppm',
                    'Heavy Metals (Total)' => '< 10 ppm',
                    'Iron (Fe)' => '< 5 ppm',
                    'Clarity' => 'Sparkling Clear',
                ],
                'meta_title' => 'Ammonium Bisulphite Food Grade Manufacturer | Uma Dye Chem',
                'meta_description' => 'Food-Grade Ammonium Bisulphite for Caramel Color (E150c/E150d), sugar refining & food preservation. High-purity manufacturer in India.',
                'meta_keywords' => 'Ammonium bisulphite food grade, caramel color chemical, sugar refining sulfite, food additive India',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Ammonium Sulphite Solution - 40%',
                'slug' => 'ammonium-sulphite-solution-40',
                'category' => 'Sulphite Solutions',
                'short_description' => 'High-purity neutral-alkaline Ammonium Sulphite 40% solution. Key formulation for photographic developers, pulp pulping, flue gas desulphurization, and chemical synthesis.',
                'description' => "Ammonium Sulphite Solution 40% [(NH4)2SO3] is a neutral to mild alkaline sulphite liquid. Unlike bisulphites, it operates at pH 7.0 - 9.0, making it invaluable for systems where acidic conditions are unacceptable.

Produced with high stoichiometric precision, it is extensively used in photography, specialty pulp bleaching, gas scrubbers, and industrial synthesis.",
                'cas_number' => '10196-04-0',
                'molecular_formula' => '(NH4)2SO3',
                'molecular_weight' => '116.14 g/mol',
                'appearance' => 'Clear, colorless to very pale yellow liquid with mild ammoniacal odor',
                'grade' => 'Industrial / Photographic Grade',
                'concentration' => '38.0% - 41.0% (w/w)',
                'ph_value' => '7.0 - 9.0',
                'specific_gravity' => '1.18 - 1.22 @ 25°C',
                'so2_content' => '21.0% - 23.5%',
                'packaging' => '250 kg HDPE Drums, 1000L IBC Tanks, Bulk Tanker',
                'applications' => "Photographic developer fixing bath formulation
Sulphite pulping & wood chips treatment in paper mills
Flue gas desulphurisation (FGD) wet scrubbers
Oxygen scavenger in alkaline boiler systems
Intermediate for agrochemicals and ammonium thiosulfate",
                'industries' => "Photography & Imaging
Pulp & Paper Manufacturing
Flue Gas Treatment & Environmental Control
Boiler & Steam Systems
Agrochemical Synthesis",
                'specifications_json' => [
                    'Chemical Formula' => '(NH4)2SO3',
                    'Assay (as Ammonium Sulphite)' => '38.0% - 41.0%',
                    'HSN Code' => '2832 1010',
                    'Specific Gravity @ 25°C' => '1.18 - 1.22',
                    'pH Value' => '7.0 - 9.0',
                    'Insoluble Matter' => 'Nil',
                ],
                'meta_title' => 'Ammonium Sulphite Solution 40% Manufacturer | Uma Dye Chem',
                'meta_description' => 'Manufacturer of Ammonium Sulphite Solution 40% (CAS 10196-04-0) in Gujarat, India. Photographic grade, FGD scrubbing, paper pulping.',
                'meta_keywords' => 'Ammonium Sulphite 40%, CAS 10196-04-0, photographic chemicals, pulping chemical, Uma Dye Chem',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 6,
            ],
            [
                'name' => 'Oxygen Scavenger',
                'slug' => 'oxygen-scavenger',
                'category' => 'Oilfield & Water Treatment Specialty',
                'short_description' => 'Engineered liquid Oxygen Scavenger for complete elimination of dissolved oxygen in boiler feed water, oilfield waterflood lines, and deep-well injection fluids.',
                'description' => "Uma Dye Chem's Oxygen Scavenger is a specialized sulfur-based deoxygenating formulation engineered to rapidly eliminate dissolved oxygen down to ppb (parts per billion) levels.

Dissolved oxygen causes severe localized pitting and catastrophic corrosion in steel pipelines, heat exchangers, boiler tubes, and downhole casing. Our Oxygen Scavenger reacts virtually instantaneously with dissolved oxygen, neutralizing corrosion risks and protecting valuable capital equipment.

Reaction Mechanism:
2 NH4HSO3 + O2 → (NH4)2SO4 + H2SO4

Field Application Guidelines:
• Theoretical stoichiometric ratio: ~4.6 ppm active ABS per 1 ppm of dissolved O2
• Typical oilfield field dosage: 6.0 to 9.5 ppm per 1 ppm of dissolved oxygen",
                'cas_number' => 'Proprietary / Formulated (ABS Base)',
                'molecular_formula' => 'ABS-based specialized formulation',
                'molecular_weight' => 'N/A',
                'appearance' => 'Clear to straw-colored liquid',
                'grade' => 'Oilfield & Industrial Water Grade',
                'concentration' => 'High Active Formulation (60% - 65% active eq.)',
                'ph_value' => '4.0 - 5.5',
                'specific_gravity' => '1.34 - 1.38 @ 20°C',
                'so2_content' => '40.0% Min',
                'packaging' => '25L Carboys, 200L HDPE Drums, 1000L IBC Totes, Bulk Tankers',
                'applications' => "Offshore and onshore seawater injection systems
Produced water re-injection and waterflood projects
Hydrostatic testing (hydrotest) corrosion inhibition
Drilling fluids, completion fluids, and packer fluids
High and medium pressure steam boiler feedwater
Geothermal brine oxygen removal",
                'industries' => "Oil & Gas Upstream & Midstream
Thermal Power Plants & Co-gen Facilities
Petrochemical Refineries
Marine & Offshore Platforms
Boiler Water Treatment Specialists",
                'specifications_json' => [
                    'Base' => 'Ammonium Bisulphite Chemistry',
                    'Active Content' => '60% - 65% Equiv.',
                    'Specific Gravity @ 20°C' => '1.34 - 1.38',
                    'Reaction Speed' => 'Ultra Fast Dissolved O2 Scavenging',
                    'Residual O2 Target' => '< 10 ppb achievable',
                    'Compatibility' => 'Compatible with biocides and scale inhibitors',
                ],
                'meta_title' => 'Industrial Oxygen Scavenger for Oilfield & Boilers | Uma Dye Chem',
                'meta_description' => 'High performance Oxygen Scavenger formulation for boiler feedwater and oilfield waterflooding. Rapid dissolved O2 removal from Uma Dye Chem.',
                'meta_keywords' => 'Oxygen scavenger, boiler water deoxygenation, oilfield corrosion inhibitor, dissolved oxygen removal',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 7,
            ],
            [
                'name' => 'Ammonium Bisulphite Solution',
                'slug' => 'ammonium-bisulphite-solution',
                'category' => 'Custom Formulations',
                'short_description' => 'Custom-compounded Ammonium Bisulphite solutions tailor-made to client specific assays, pH requirements, and packaging formats.',
                'description' => "Understanding that specific industrial processes demand non-standard specifications, Uma Dye Chem offers custom blending of Ammonium Bisulphite solutions tailored to exact customer parameters.

Whether you require a specialized concentration (e.g. 45%, 50%, 55%, 68%), customized pH adjustment, added stabilization, or custom drums labeling for export, our chemical engineering team provides precise customization with full batch CoA and test traceability.",
                'cas_number' => '10192-30-0',
                'molecular_formula' => 'NH4HSO3',
                'molecular_weight' => '99.10 g/mol',
                'appearance' => 'Clear liquid (customized tint or water-white)',
                'grade' => 'Custom Formulated',
                'concentration' => 'Tailored (20% to 70% as requested)',
                'ph_value' => 'Customized (typically 3.5 - 6.0)',
                'specific_gravity' => 'Matched to concentration',
                'so2_content' => 'As specified',
                'packaging' => 'Customer specified packaging, private labeling available',
                'applications' => "Specialty chemical manufacturing
Toll chemical blending
Proprietary water treatment formulas
Specialized paper bleaching recipes",
                'industries' => "Global Chemical Importers
Specialty Compounders
Multi-national Water Treatment Companies",
                'specifications_json' => [
                    'Concentration Range' => 'Custom (20% to 70%)',
                    'Quality Standard' => 'ISO 9001:2015 Manufacturing Standard',
                    'COA' => 'Full batch-wise Certificate of Analysis',
                    'Export Logistics' => 'Sea freight FCL in IBCs or Drums',
                ],
                'meta_title' => 'Custom Ammonium Bisulphite Solution Blends | Uma Dye Chem',
                'meta_description' => 'Custom concentration Ammonium Bisulphite solution formulated to exact customer specifications. Contract manufacturing & global export.',
                'meta_keywords' => 'Ammonium Bisulphite custom concentration, custom chemical manufacturer, chemical contract manufacturing',
                'is_active' => true,
                'is_featured' => false,
                'sort_order' => 8,
            ],
            [
                'name' => 'Ammonium Bisulphite Nickel',
                'slug' => 'ammonium-bisulphite-nickel',
                'category' => 'Catalyzed Oxygen Scavengers',
                'short_description' => 'Nickel-catalyzed Ammonium Bisulphite solution engineered for ultra-fast reaction kinetics in sub-zero and cold temperature water treatment applications.',
                'description' => "Ammonium Bisulphite Nickel is a premier catalyzed oxygen scavenger solution incorporating homogeneous nickel catalyst complexes (Ni2+ ions).

Standard bisulphite reactions slow down considerably in cold waters (such as North Sea or deep subsea injection). The introduction of trace, tightly controlled nickel catalyst lowers activation energy, speeding up oxygen elimination by up to 10x even in low-temperature waters.

Key Advantages:
• Rapid oxygen scavenging at cold seawater temperatures (4°C to 15°C)
• Reduces necessary contact vessel retention time
• Proven track record in offshore oil platform seawater injection",
                'cas_number' => '10192-30-0 (with Ni catalyst)',
                'molecular_formula' => 'NH4HSO3 + Ni Catalyst Complex',
                'molecular_weight' => '99.10 g/mol (base)',
                'appearance' => 'Clear, pale greenish-yellow liquid',
                'grade' => 'Catalyzed Oilfield Grade',
                'concentration' => '60% - 65% Active Bisulphite',
                'ph_value' => '4.0 - 5.5',
                'specific_gravity' => '1.36 - 1.41 @ 20°C',
                'so2_content' => '40.0% - 44.0%',
                'packaging' => '200-250 kg HDPE Drums, 1000L IBC Containers',
                'applications' => "Low-temperature offshore seawater injection systems
Subsea pipeline hydrotesting in cold water conditions
Fast-transit waterflooding pipelines
Quick-turnaround steam generation systems",
                'industries' => "Offshore Oil & Gas Platforms
Subsea Pipeline Construction & Commissioning
Marine Engineering",
                'specifications_json' => [
                    'Active Bisulphite Assay' => '60% - 65%',
                    'Catalyst Metal' => 'Nickel (Ni2+)',
                    'Nickel Content' => '25 - 40 ppm (homogeneous)',
                    'Specific Gravity @ 20°C' => '1.36 - 1.41',
                    'Crystallization Temperature' => '-5°C',
                    'Reaction Rate' => '10x acceleration over uncatalyzed ABS',
                ],
                'meta_title' => 'Ammonium Bisulphite Nickel Catalyzed Scavenger | Uma Dye Chem',
                'meta_description' => 'Nickel catalyzed Ammonium Bisulphite for ultra-fast oxygen scavenging in cold seawater injection and offshore oilfield applications.',
                'meta_keywords' => 'Ammonium Bisulphite Nickel, catalyzed oxygen scavenger, offshore seawater injection, oilfield chemicals',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 9,
            ],
            [
                'name' => 'Ammonium Bisulphite Cobalt',
                'slug' => 'ammonium-bisulphite-cobalt',
                'category' => 'Catalyzed Oxygen Scavengers',
                'short_description' => 'Cobalt-catalyzed Ammonium Bisulphite solution for instantaneous oxygen reduction in high-speed, critical-dwell oilfield water pipelines.',
                'description' => "Ammonium Bisulphite Cobalt is an advanced catalyzed deoxygenation chemical formulated with cobalt catalyst traces (Co2+).

Cobalt is among the most potent catalytic accelerators for the bisulphite-oxygen redox reaction. It enables nearly instantaneous dissolved oxygen capture even with very short retention times in high-velocity pipelines.

Key Features:
• Instantaneous reaction kinetics with dissolved O2
• Characteristic pinkish/amber clear appearance due to cobalt catalyst
• Maximizes corrosion protection in severe high-pressure oilfield lines",
                'cas_number' => '10192-30-0 (with Co catalyst)',
                'molecular_formula' => 'NH4HSO3 + Co Catalyst Complex',
                'molecular_weight' => '99.10 g/mol (base)',
                'appearance' => 'Clear, pinkish to reddish-amber liquid',
                'grade' => 'Specialty Catalyzed Grade',
                'concentration' => '60% - 65% Active Bisulphite',
                'ph_value' => '4.0 - 5.5',
                'specific_gravity' => '1.37 - 1.41 @ 20°C',
                'so2_content' => '40.0% - 43.5%',
                'packaging' => '250 kg HDPE Drums, 1000L IBC Totes',
                'applications' => "High-velocity waterflood injection manifolds
Fast-flowing oilfield pipeline protection
Emergency boiler feedwater deoxygenation
High-demand industrial processing loops",
                'industries' => "Oil & Gas Upstream
Heavy Industrial Steam Systems
Petrochemical Complexes",
                'specifications_json' => [
                    'Active Bisulphite Assay' => '60% - 65%',
                    'Catalyst Metal' => 'Cobalt (Co2+)',
                    'Cobalt Content' => '20 - 30 ppm',
                    'Specific Gravity @ 20°C' => '1.37 - 1.41',
                    'Reaction Kinetics' => 'Instantaneous oxygen reduction',
                ],
                'meta_title' => 'Ammonium Bisulphite Cobalt Catalyzed Solution | Uma Dye Chem',
                'meta_description' => 'Cobalt-catalyzed Ammonium Bisulphite solution for instantaneous oxygen scavenging in high-velocity pipelines and oilfield injection.',
                'meta_keywords' => 'Ammonium Bisulphite Cobalt, cobalt catalyzed oxygen scavenger, oilfield chemical exporter India',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 10,
            ],
        ];

        foreach ($products as $pData) {
            Product::updateOrCreate(['slug' => $pData['slug']], $pData);
        }
    }
}
