<?php
use App\Region;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class NewZealandRegions
 *
 * A class used to seed New Zealand regions for the Regions database table.
 *
 * @author Rob Attfield <emailme@robertattfield> <http://www.robertattfield.com>
 */
class NewZealandRegions extends Seeder
{
    public function run(){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('region')->truncate();

        $countryId = DB::table('country')->where('name', 'New Zealand')->value('id');

        $regions = [
            [
                'name' => "Northland",
                'country_id' => $countryId,
                'meta_desc' => "Northland (Māori: Te Tai Tokerau, also Te Hiku-o-te-Ika, 'the Tail of the Fish') is the northernmost of New Zealand's 16 local government regions.",
                'long_desc' => "The Northland Region (Māori: Te Tai Tokerau, also Te Hiku-o-te-Ika, 'the Tail of the Fish' (of Maui)) is the northernmost of New Zealand's 16 local government regions. New Zealanders often call it the Far North, or, because of its mild climate, the Winterless North. The main population centre is the city of Whangarei and the largest town is Kerikeri. The Northland Region occupies the northern 80% (265 kilometres) of the 330 kilometre-long Northland Peninsula, the southernmost part of which is in the Auckland Region. Stretching from a line where the peninsula narrows to a width of just 15 kilometres a little north of the town of Wellsford, Northland Region extends north to the tip of the Northland Peninsula, covering an area of 13,940 square kilometers, a little over five per cent of the country's total area. It is bounded to the west by the Tasman Sea, and to the east by the Pacific Ocean. The land is predominantly rolling hill country. Farming and forestry occupy over half of the land, and are two of the region's main industries.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Auckland",
                'country_id' => $countryId,
                'meta_desc' => "The Auckland Region is one of the sixteen regions of New Zealand, named for the city of Auckland, the country's largest urban area.",
                'long_desc' => "The Auckland Region is one of the sixteen regions of New Zealand, named for the city of Auckland, the country's largest urban area. The region encompasses the Auckland metropolitan area, smaller towns, rural areas, and the islands of the Hauraki Gulf. With 34 percent of the nation's residents, it has by far the biggest population and economy of any region of New Zealand, but the second-smallest land area. On 1 November 2010, the Auckland Region became a unitary authority controlled by the Auckland Council, replacing the previous regional council and seven local councils. In the process, an area in its southeastern corner was transferred to the neighbouring Waikato Region. The name 'Auckland Region' remains present in casual usage.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Waikato",
                'country_id' => $countryId,
                'meta_desc' => "The Waikato is a local government region of the upper North Island of New Zealand.",
                'long_desc' => "The Waikato is a local government region of the upper North Island of New Zealand. It covers the Waikato, Hauraki, Coromandel Peninsula, the northern King Country, much of the Taupo District, and parts of Rotorua District. It is governed by the Waikato Regional Council. The region stretches from Coromandel Peninsula in the north, to the north-eastern slopes of Mount Ruapehu in the south, and spans the North Island from the west coast, through the Waikato and Hauraki to Coromandel Peninsula on the east coast. Broadly, the extent of the region is the Waikato River catchment. Other major catchments are those of the Waihou, Piako, Awakino and Mokau rivers. The region is bounded by Auckland on the north, Bay of Plenty on the east, Hawke's Bay on the south-east, and Manawatu-Wanganui and Taranaki on the south. Waikato Region is the fourth largest region in the country in area and population: It has an area of 25,000 km² and a population of 439,200 (June 2015 estimate).",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Bay Of Plenty",
                'country_id' => $countryId,
                'meta_desc' => "The Bay of Plenty (Māori: Te Moana-a-Toi), is a region in the North Island of New Zealand situated around the body of water of the same name.",
                'long_desc' => "The Bay of Plenty (Māori: Te Moana-a-Toi), often abbreviated to BOP, is a region in the North Island of New Zealand situated around the body of water of the same name. The bay was named by James Cook after he noticed the abundant food supplies at several Māori villages there, in stark contrast to the earlier observations he had made in Poverty Bay. In the 2006 Census, the Bay of Plenty had an estimated resident population of 257,379, making it the fifth-most populous region in New Zealand. It also has the third-highest regional population density in New Zealand, with only the 11th-largest land area. The major population centres are Tauranga, Rotorua and Whakatane. The Bay of Plenty is one of the fastest growing regions in New Zealand: the regional population increased by 7.5% between 2001 to 2006, with significant growth along the coastal and western parts, and is projected to increase to 277,900 by the year 2011.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Gisborne",
                'country_id' => $countryId,
                'meta_desc' => "The Gisborne Region (Māori: Te Tai Rāwhiti) is an area of New Zealand governed by the Gisborne District Council. It is named after the city of Gisborne.",
                'long_desc' => "The Gisborne District or Gisborne Region (Māori: Te Tai Rāwhiti) is an area of northeastern New Zealand governed by the Gisborne District Council. It is named after its largest settlement, the city of Gisborne. It is also known as the East Coast region, although it is often divided into the East Coast proper, also known as East Cape, north of the city, and Poverty Bay, the area including and surrounding the city. The region is also sometimes referred to as the East Cape, although that also refers specifically to the promontory at the northeastern extremity. More recently, it has been called Eastland, although that can also include Opotiki in the eastern Bay of Plenty to the northwest, and Wairoa to the south. Its Māori name, Te Tai Rāwhiti, means the Coast of the Sunrise, reflecting the fact that it is the first part of the New Zealand mainland to see the sun rise.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Hawkes Bay",
                'country_id' => $countryId,
                'meta_desc' => "Hawke's Bay (Māori: Heretaunga) is a region of New Zealand on the east coast of the North Island. It is recognised world-wide for its award-winning wines.",
                'long_desc' => "Hawke's Bay (Māori: Heretaunga) is a region of New Zealand on the east coast of the North Island. It is recognised on the world stage for its award-winning wines. Hawke's Bay Regional Council sits in both the cities of Napier and Hastings. It derives from Hawke Bay which was named by Captain James Cook in honour of Admiral Edward Hawke who decisively defeated the French at the Battle of Quiberon Bay in 1759. The region is situated on the east coast of the North Island. It bears the former name of what is now Hawke Bay, a large semi-circular bay that extends for 100 kilometres from northeast to southwest from Mahia Peninsula to Cape Kidnappers. The Hawke's Bay region includes the hilly coastal land around the northern and central bay, the floodplains of the Wairoa River in the north, the wide fertile Heretaunga Plains around Hastings in the south, and a hilly interior stretching up into the Kaweka and Ruahine Ranges.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Taranaki",
                'country_id' => $countryId,
                'meta_desc' => "Taranaki is a region in the west of New Zealand's North Island, administered by the Taranaki Regional Council.",
                'long_desc' => "Taranaki is a region in the west of New Zealand's North Island, administered by the Taranaki Regional Council. It is named for its main geographical feature, the stratovolcano of Mount Taranaki. The main centre is the city of New Plymouth. The New Plymouth District has over 65% of the population of Taranaki.23 New Plymouth is in North Taranaki along with Inglewood and Waitara. South Taranaki towns include Hawera, Stratford and Eltham. Taranaki is on the west coast of the North Island, surrounding the volcanic peak. The region has an area of 7258 km². The large bays north-west and south-west of Cape Egmont are the prosaically named North Taranaki Bight and South Taranaki Bight. Mount Taranaki or Mount Egmont, the second highest mountain in the North Island, is the dominant feature of the region. A Māori legend says that Taranaki previously lived with the Tongariro, Ngauruhoe and Ruapehu mountains of the central North Island but fled to its current location after a battle with Tongariro. A near-perfect cone, it last erupted in the mid-18th century. The mountain and its immediate surrounds form Egmont National Park.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Manawatu",
                'country_id' => $countryId,
                'meta_desc' => "The Manawatu District is a local government district in the Manawatu-Wanganui Region in the North Island of New Zealand.",
                'long_desc' => "The Manawatu District is a local government district in the Manawatu-Wanganui Region in the North Island of New Zealand. Commonly referred to as 'The Manawatu', the district is based on the town of Feilding and includes most of the area between the Manawatu River in the south and the Rangitikei River in the north; stretching from slightly south of the settlement of Himatangi in the south, to just south of Mangaweka in the north; and from the Rangitikei River to the summits of the Ruahine Ranges in the east. The district does not include the area around Foxton, Foxton Beach or the mouth of the Manawatu River. It also excludes the area around the city of Palmerston North (including Ashhurst). The district has an area of 2,624 km². The population of the district is 29,300 (June 2015 estimate). The main town, Feilding, has a population of 15,950. Other towns, townships and villages include Halcombe, Himatangi, Bainesse, Waituna West, Kimbolton, Apiti, Rangiwahia, Rongotea, Pohangina, Tangimoana, Himatangi Beach and Sanson.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Wanganui",
                'country_id' => $countryId,
                'meta_desc' => "Whanganui (also spelt Wanganui) is a large town on the west coast of the North Island of New Zealand. ",
                'long_desc' => "Whanganui (also spelt Wanganui) is a large town on the west coast of the North Island of New Zealand. The Whanganui River, New Zealand's longest navigable waterway, runs from Mount Tongariro to the sea. Whanganui is part of the Manawatu-Wanganui region. Like several New Zealand centres, it was officially designated a city until administrative reorganisation in 1989, and is now run by a District Council. Although called Wanganui from 1854, the New Zealand Geographic Board recommended that the name be changed to 'Whanganui', and the government decided in December 2009 that, while either spelling was acceptable, Crown agencies would use the Whanganui spelling. Whanganui is located on the South Taranaki Bight, close to the mouth of the Whanganui River. It is 200 kilometres north of Wellington and 75 kilometres northwest of Palmerston North, at the junction of State Highways 3 and 4. Most of the town lies on the river's northwestern bank, although some suburbs are located on the opposite side of the river.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Wellington",
                'country_id' => $countryId,
                'meta_desc' => "The Wellington Region (also known as Greater Wellington) is a local government region of New Zealand that occupies the southern end of the North Island.",
                'long_desc' => "The Wellington Region (also known as Greater Wellington) is a local government region of New Zealand that occupies the southern end of the North Island. It includes the cities (in order of population) of Wellington, Lower Hutt, Porirua and Upper Hutt, plus smaller towns. The region is administered by the Wellington Regional Council, which uses the promotional name Greater Wellington Regional Council. The council region covers the conurbation around the capital city, Wellington, and the cities of Lower Hutt, Porirua, and Upper Hutt, each of which has a rural hinterland; it extends up the west coast of the North Island, taking in the coastal settlements of the Kapiti Coast District, which includes the southern fringe of the area commonly known as Horowhenua and the town of Otaki; east of the Rimutaka Range it includes three largely rural districts containing most of Wairarapa, covering the towns of Masterton, Carterton, Greytown, Featherston and Martinborough. The Wellington Regional Council was first formed in 1980 from a merger of the Wellington Regional Planning Authority and the Wellington Regional Water Board.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Nelson",
                'country_id' => $countryId,
                'meta_desc' => "Nelson is a city on the eastern shores of Tasman Bay, and is the economic and cultural centre of the Nelson region.",
                'long_desc' => "Nelson is a city on the eastern shores of Tasman Bay, and is the economic and cultural centre of the Nelson region. Established in 1841, it is the second-oldest settled city in New Zealand and the oldest in the South Island, and was proclaimed a city by royal charter in 1858. Nelson city is bordered to the west and south-west by the Tasman District Council and the north-east, east and south-east by the Marlborough District Council. The city does not include Richmond, the region's second-largest settlement. Nelson City has a population of around 46,437 ranking it as New Zealand's 12th most populous city and the geographical centre of New Zealand. When combined with the town of Richmond which has close on 14,000 residents, Nelson is ranked as New Zealand's 9th largest urban area by population. Nelson is well known for its thriving local arts and crafts scene, Each year, the city hosts events popular with locals and tourists alike, such as the Nelson Arts Festival.The annual Wearable Art Awards began near Nelson and a local museum, World of Wearable Art now showcases winning designs alongside a collection of classic cars.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Tasman",
                'country_id' => $countryId,
                'meta_desc' => "The Tasman District is a district of New Zealand. It borders the West Coast Region, Marlborough Region and Nelson City.",
                'long_desc' => "The Tasman District is a district of New Zealand. It borders the West Coast Region, Marlborough Region and Nelson City. It is a unitary authority administered by the Tasman District Council, which sits at Richmond, with Community Boards serving outlying communities in Motueka and Golden Bay. The city of Nelson has its own unitary authority separate from Tasman District, and both comprise a single region in some contexts, but not local government or resource management. Tasman District is a large area at the western corner of the north end of the South Island of New Zealand. It covers 9,786 square kilometres and is bounded on the west by the Matiri Ranges, Tasman Mountains and the Tasman Sea. To the north Tasman and Golden Bays form its seaward edge, and the eastern boundary extends to the edge of Nelson city, and includes part of the Spencer Mountains and the Saint Arnaud and Richmond Ranges. The Victoria Ranges form Tasman's southern boundary and the district's highest point is Mount Franklin, at 2,340 metres.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Marlborough",
                'country_id' => $countryId,
                'meta_desc' => "The Marlborough Region, commonly known simply as Marlborough, is one of the regions of New Zealand, located in the northeast of the South Island.",
                'long_desc' => "The Marlborough Region, commonly known simply as Marlborough, is one of the regions of New Zealand, located in the northeast of the South Island. Marlborough is a unitary authority, both a region and a district, and its council is located at Blenheim. Marlborough is known for its dry climate, the picturesque Marlborough Sounds, and Sauvignon blanc wine. It takes its name from the earlier Marlborough Province, which was named after John Churchill, 1st Duke of Marlborough, an English general and statesman. Marlborough's geography can be roughly divided into four sections. Two of these sections, in the south and the west, are mountainous. This is particularly true of the southern section, which rises to the peaks of the Kaikoura Ranges. These two mountainous regions are the final northern vestiges of the ranges that make up the Southern Alps, although that name is rarely applied to mountains this far north. Between these two areas is the long straight valley of the Wairau River. This broadens to wide plains at its eastern end, in the centre of which stands the town of Blenheim. This region has fertile soil and temperate weather, enabling it to become a centre of the New Zealand wine industry. The fourth geographic zone lies along its north coast. Here the drowned valleys of the Marlborough Sounds make for a convoluted and attractive coastline. The town of Picton is located at the southern end of one of the larger sounds, Queen Charlotte Sound.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "West Coast",
                'country_id' => $countryId,
                'meta_desc' => "The West Coast (Māori: Te Tai Poutini) is a region of New Zealand on the west coast of the South Island.",
                'long_desc' => "The West Coast (Māori: Te Tai Poutini) is a region of New Zealand on the west coast of the South Island, one of the more remote and most sparsely populated areas. It is administered by the West Coast Regional Council. At the territorial authority level, the region comprises Buller District, Grey District and Westland District. The principal towns are Westport, Greymouth and Hokitika. The region reaches from Kahurangi Point in the north to Awarua Point in the south, a distance of 600 km. To the west is the Tasman Sea (which like the Southern Ocean can be very rough, with four-metre swells common), and to the east are the Southern Alps. Much of the land is rugged, with a coastal plain where much of the population resides. The land is very scenic, with wild coastlines, mountains and a very high proportion of native bush, much of it native temperate rain forest. It is the only part of New Zealand where significant tracts of lowland forest remain: elsewhere, for instance on the Canterbury Plains and in the Firth of Thames, they have been almost completely destroyed for settlement and agriculture. Scenic areas include the Haast Pass, Fox and Franz Josef Glaciers, the Pancake Rocks at Punakaiki and the Heaphy Track.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Canterbury",
                'country_id' => $countryId,
                'meta_desc' => "The New Zealand region of Canterbury (Māori: Waitaha) is mainly composed of the Canterbury Plains and the surrounding mountains.",
                'long_desc' => "The New Zealand region of Canterbury (Māori: Waitaha) is mainly composed of the Canterbury Plains and the surrounding mountains. Its main city, Christchurch, hosts the main office of the Christchurch City Council, the Canterbury Regional Council – called Environment Canterbury (ECAN) – and the University of Canterbury. The Canterbury Province was formed in 1853 following the passing of the New Zealand Constitution Act 1852 from the part of New Munster Province and covered both the east and west coasts of the South Island. The province was abolished, along with other provinces of New Zealand, when the Abolition of the Provinces Act came into force on 1 Nov 1876. The modern Canterbury Region has slightly different boundaries, particularly in the North, where it includes some districts from the old Nelson Province. Canterbury is New Zealand's largest region by area, with an area of 45,346 square kilometers. The region is traditionally bounded in the north by the Conway River and to the west by the Southern Alps. The southern boundary is the Waitaki River. The area is commonly divided into North Canterbury (north of the Rakaia River to the Conway River), Mid Canterbury (from the Rakaia River to the Rangitata River), South Canterbury (south of the Rangitata River to the Waitaki River) and Christchurch City. For many purposes South Canterbury is considered a separate region, centred on the city of Timaru. The population of Canterbury region is 586,500 (June 2015 estimate), making it the largest region in the South Island and the second largest region in New Zealand by population.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Otago",
                'country_id' => $countryId,
                'meta_desc' => "Otago is a region of New Zealand in the south of the South Island administered by the Otago Regional Council.",
                'long_desc' => "Otago is a region of New Zealand in the south of the South Island administered by the Otago Regional Council. It has an area of approximately 32,000 square kilometres (12,000 sq mi), making it the country's third largest local government region. Its population was 215,100 in the June 2015 estimate. The name 'Otago' is an old southern Maori word whose North Island dialect equivalent is 'Otakou', introduced to the south by Europeans in the 1840s. The exact meaning of the term is disputed, with common translations being 'isolated village' and 'place of red earth', the latter referring to the reddish-ochre clay which is common in the area around Dunedin. 'Otago' is also the old name of the European settlement on the Otago Harbour, established by the Weller Brothers in 1831, which lies close to the modern harbourside community of Otakou. The place later became the focus of the Otago Association, an offshoot of the Free Church of Scotland, notable for its high-minded adoption of the principle that ordinary people, not the landowner, should choose the ministers. Major centres include Dunedin (the principal city), Oamaru (made famous by Janet Frame), Balclutha, Alexandra, and the major tourist centres Queenstown and Wanaka. Kaitangata in South Otago is a prominent source of coal. The Waitaki and Clutha rivers provide much of the country's hydroelectric power. Some parts of the area originally covered by Otago Province are now administered as part of Southland region.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Southland",
                'country_id' => $countryId,
                'meta_desc' => "Southland (Māori: Murihiku) is New Zealand's southernmost region. It consists of the southwestern portion of the South Island and Stewart Island / Rakiura.",
                'long_desc' => "Southland (Māori: Murihiku) is New Zealand's southernmost region. It consists mainly of the southwestern portion of the South Island and Stewart Island / Rakiura. It includes Southland District, Gore District and the city of Invercargill. The region covers over 3.1 million hectares and spans over 3,400 km of coast. Southland's two principal urban settlements are the city of Invercargill and the town of Gore. Southland covers an area of 28,681 square kilometres. In the June 2015 estimate it had a population of 97,300, making it one of New Zealand's most sparsely populated areas. The sizable western part Fiordland is almost empty of permanent human inhabitation. The region is home to two national parks: Fiordland National Park and Rakiura National Park. The former which covers 7,860 square kilometres; making it New Zealand's largest national park. Southland also includes Stewart Island, 85% of which is covered by Rakiura National Park. Both parks are administrated by the Department of Conservation.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach($regions as $r){
            $region = new Region($r);
            $region->save();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

}