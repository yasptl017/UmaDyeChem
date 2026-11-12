@extends('layouts.app')

@section('title', 'Industries Served | Oilfield, Water Treatment, Food, Textiles | Uma Dye Chem')
@section('meta_description', 'Discover the key global industries powered by Uma Dye Chem chemicals: Oil & Gas, Water Dechlorination, Caramel Food Color, Textiles, Pulp & Paper.')

@section('content')

<!-- Header Banner -->
<section class="bg-navy-950 text-white py-14 border-b border-navy-800">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-semibold mb-3">
                <i class="fa-solid fa-industry"></i> Global Industry Applications
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold font-display text-white">
                Engineered for High-Stakes Applications
            </h1>
            <p class="text-slate-300 text-sm mt-3 leading-relaxed">
                Whether deoxygenating seawater deep within offshore oilfield reservoirs or providing food-grade purity for caramel colorings, Uma Dye Chem delivers precision chemical performance.
            </p>
        </div>
    </div>
</section>

<!-- Detailed Industry Blocks -->
<section class="py-16 bg-slate-50 space-y-12">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- 1. Oil & Gas / Petroleum -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-oil-well"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 01</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Oil & Gas Exploration & Production</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 70%, 65%, Nickel & Cobalt Catalyzed</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Combatting Dissolved Oxygen Pitting in High-Pressure Pipelines</h4>
                <p>
                    In oilfield waterflooding and enhanced oil recovery (EOR), seawater and produced water are injected deep into geological formations to maintain reservoir pressure. Untreated water contains up to 8-10 ppm of dissolved oxygen, which aggressively attacks carbon steel tubulars and causes catastrophic pitting.
                </p>
                <p>
                    Our high-concentration <strong>Ammonium Bisulphite 70%</strong> and <strong>Oxygen Scavenger formulations</strong> react rapidly with dissolved O2:
                </p>
                <div class="bg-slate-50 rounded-xl p-3 font-mono text-[11px] text-slate-800 border border-slate-200">
                    2 NH4HSO3 + O2 → (NH4)2SO4 + H2SO4
                </div>
                <p>
                    For cold subsea environments (such as offshore North Sea or deep marine waterflooding), our <strong>Nickel Catalyzed</strong> and <strong>Cobalt Catalyzed</strong> formulations lower activation energy, accelerating reaction kinetics by up to 10-fold even in low-temperature waters.
                </p>
            </div>
        </div>

        <!-- 2. Water & Wastewater Treatment -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-brand-500/20 text-brand-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 02</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Water & Wastewater Treatment</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 65%, 60%, 40% Solutions</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Rapid Dechlorination & Membrane Protection</h4>
                <p>
                    Residual free chlorine is lethal to aquatic life if discharged into water bodies, and it irreversibly degrades polyamide thin-film composite reverse osmosis (RO) membranes.
                </p>
                <p>
                    Our Ammonium Bisulphite solutions provide safe, complete, and instantaneous dechlorination:
                </p>
                <div class="bg-slate-50 rounded-xl p-3 font-mono text-[11px] text-slate-800 border border-slate-200">
                    NH4HSO3 + Cl2 + H2O → NH4HSO4 + 2 HCl
                </div>
                <p>
                    Unlike sodium metabisulphite powders which require dusty manual bag dumping and dissolution equipment, our ready-to-dose liquid ABS solutions flow directly through automated chemical metering pumps with no clogging or dust exposure.
                </p>
            </div>
        </div>

        <!-- 3. Food Processing & Caramel Color -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 03</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Food Processing & Caramel Color</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Product:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite Food Grade</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Reagent for Ammonia Caramel Colorings & Preservation</h4>
                <p>
                    Ammonia Caramel (Class III, E150c) and Sulfite Ammonia Caramel (Class IV, E150d) are the most widely consumed food colorings in the world—found in soft drinks, beer, soy sauces, confectionery, and baked goods.
                </p>
                <p>
                    Uma Dye Chem produces <strong>Food Grade Ammonium Bisulphite</strong> under sanitary conditions with heavy metal levels strictly below international food safety limits (Arsenic &lt; 1 ppm, Lead &lt; 2 ppm). It also serves as an antioxidant and anti-browning agent during sugar refining and fruit/vegetable processing.
                </p>
            </div>
        </div>

        <!-- 4. Textile Processing & Dye Intermediates -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 04</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Textiles & Dye Manufacturing</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 65%, 60%, Custom Blends</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Bleach Neutralization & Chemical Synthesis</h4>
                <p>
                    Following chlorine and hypochlorite bleaching of cotton and cellulosic textiles, residual chlorine must be completely eradicated before dyeing to prevent shade distortion and tensile strength loss. Ammonium Bisulphite acts as a dependable, non-damaging antichlor.
                </p>
                <p>
                    Additionally, in dyestuff and intermediate synthesis plants in Gujarat and Maharashtra, ABS is utilized as a mild reducing agent for reduction of nitro groups and sulfonation reactions.
                </p>
            </div>
        </div>

        <!-- 5. Pulp & Paper Manufacturing -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 05</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Pulp & Paper Manufacturing</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 60%, 40% Solutions</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Residual Chlorine Removal & Pulp Brightness Control</h4>
                <p>
                    Chlorine-based bleaching stages in kraft and sulfite pulp mills leave residual oxidants in the pulp slurry and effluent that must be neutralized before further processing or discharge, as they otherwise degrade cellulose fiber strength and brightness stability.
                </p>
                <p>
                    Our Ammonium Bisulphite solutions act as a fast, reliable dechlorinating and anti-chlor agent in washing and bleach-plant effluent treatment, while also serving as a sulfonating reagent in certain sulfite pulping liquor preparations.
                </p>
            </div>
        </div>

        <!-- 6. Leather & Tanning -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-mitten"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 06</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Leather & Tanning Industry</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 65%, Ammonium Sulphite Solution 40%</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Reducing Agent for Dyeing & Chrome-Free Processing</h4>
                <p>
                    Leather tanneries use mild sulfite-based reducing agents during dyeing, fat-liquoring, and chrome-reduction stages to stabilize color uptake and manage the oxidation state of process liquors.
                </p>
                <p>
                    Our Ammonium Bisulphite and Ammonium Sulphite Solution grades are supplied to tanning clusters for de-chroming baths and as a buffering reducing agent, helping mills maintain consistent leather tone and reduce effluent treatment load.
                </p>
            </div>
        </div>

        <!-- 7. Power Generation & Boiler Feed Water -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-rose-500/20 text-rose-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 07</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Power Generation & Boiler Feed Water</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Oxygen Scavenger Formulation, Nickel Catalyzed Bisulphite</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Corrosion Control in High-Pressure Steam Systems</h4>
                <p>
                    Dissolved oxygen in boiler feed water accelerates pitting corrosion in economizers, boiler tubes, and condensate return lines, leading to costly unplanned shutdowns at thermal power plants and captive co-generation units.
                </p>
                <p>
                    Our catalyzed Oxygen Scavenger Formulation reacts rapidly with residual O2 even at low feed-water temperatures, protecting high-pressure steam-generating equipment and extending asset life with minimal chemical dosing.
                </p>
            </div>
        </div>

        <!-- 8. Rubber & Latex Processing -->
        <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-xs grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4 bg-navy-900 text-white p-8 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-2xl mb-4">
                        <i class="fa-solid fa-circle-dot"></i>
                    </div>
                    <span class="text-xs font-bold text-cyan-400 uppercase tracking-wider">Sector 08</span>
                    <h3 class="text-2xl font-bold font-display mt-1">Rubber & Latex Processing</h3>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-800 text-xs text-slate-400">
                    Recommended Products:
                    <div class="font-bold text-white mt-1">Ammonium Bisulphite 60%, 40% Solutions</div>
                </div>
            </div>
            <div class="lg:col-span-8 p-8 space-y-4 text-xs text-slate-600 leading-relaxed">
                <h4 class="text-base font-bold text-navy-900">Latex Stabilization & Anti-Coagulant Applications</h4>
                <p>
                    Natural and synthetic latex processors require precise sulfite dosing to control premature coagulation, manage odor from residual preservatives, and stabilize latex compounds during storage and transport.
                </p>
                <p>
                    Our Ammonium Bisulphite solutions are used as a latex preservative additive and reducing agent during compounding, supporting consistent viscosity and shelf stability in rubber and latex manufacturing plants.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-14 bg-white border-t border-slate-200">
    <div class="max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl font-bold font-display text-navy-900">Do you operate in a different specialized industry?</h3>
        <p class="text-slate-600 text-xs sm:text-sm mt-2 max-w-2xl mx-auto">
            Our chemical engineering team formulates custom concentrations and proprietary sulfur chemical blends tailored to your exact plant conditions.
        </p>
        <div class="mt-6">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-brand-700 hover:bg-brand-800 text-white font-bold text-xs rounded-xl shadow-md transition-all">
                <i class="fa-solid fa-comments"></i> Inquire About Custom Formulations
            </a>
        </div>
    </div>
</section>

@endsection

