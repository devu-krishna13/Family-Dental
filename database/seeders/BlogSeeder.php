<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate existing blogs to prevent duplicates
        Blog::truncate();

        $blogs = [
            [
                'title' => 'Invisible Aligners Care Guide: 5 Rules for a Perfect Smile',
                'slug' => 'how-to-care-for-invisible-aligners',
                'category' => 'Aligners',
                'excerpt' => 'Got your new invisible aligners? Follow these essential cleaning and maintenance rules to keep your aligners crystal clear and effective.',
                'content' => '
                    <p>Invisible aligners have revolutionized modern orthodontics. They offer a discreet, comfortable, and highly effective way to straighten teeth without the metal brackets and wires of traditional braces. However, to ensure your treatment runs smoothly and stays hygienic, caring for your aligners properly is vital.</p>
                    
                    <h3>1. Clean Your Aligners Daily</h3>
                    <p>Just like your teeth, aligners accumulate bacteria, plaque, and saliva throughout the day. Rinse them with lukewarm water every time you take them out. Brush them gently with a soft-bristled toothbrush and clear antibacterial soap or specialized aligner cleaners. Avoid hot water, as it can warp the plastic shape.</p>
                    
                    <h3>2. Always Remove Aligners to Eat and Drink</h3>
                    <p>Except for plain water, you must remove your aligners before consuming any food or beverages. Chewing with aligners will damage the plastic, and colored drinks (like coffee, tea, or soda) will stain the aligners, making them visible and trapping sugars against your teeth.</p>
                    
                    <h3>3. Brush and Floss Before Reinserting</h3>
                    <p>Trapping food particles between your teeth and your aligners is a recipe for cavities and gum irritation. Make it a habit to brush and floss your teeth after eating before popping your trays back in.</p>
                    
                    <h3>4. Keep Them in Their Case</h3>
                    <p>Whenever your aligners are out of your mouth, they should be in their protective carrying case. Wrapping them in a napkin makes it too easy to accidentally throw them away or damage them.</p>
                    
                    <h3>5. Wear Them for at Least 22 Hours a Day</h3>
                    <p>The success of invisible aligners relies on constant, gentle pressure. Removing them for extended periods slows down tooth movement. Aim to wear them for 20 to 22 hours daily for optimal results.</p>
                ',
                'read_time' => '4 min read',
                'date' => 'June 20, 2026',
                'image' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Dental Implants vs. Dentures: Why Implants Are the Gold Standard',
                'slug' => 'why-dental-implants-are-the-best-solution',
                'category' => 'Implants',
                'excerpt' => 'Explore the long-term benefits of permanent dental implants over temporary dentures, including bone preservation and natural speech.',
                'content' => '
                    <p>Replacing a missing tooth is not just about aesthetics; it is critical for your speech, chewing ability, and long-term oral structure. While dentures have been the traditional choice for decades, modern dentistry considers dental implants to be the gold standard. Here is why.</p>
                    
                    <h3>1. Natural Look, Feel, and Function</h3>
                    <p>Dental implants are designed to look and function exactly like your natural teeth. The implant post acts as a replacement for the tooth root, fusing directly to your jawbone. This provides unmatched stability—you can eat your favorite foods, speak clearly, and smile confidently without worrying about slipping dentures.</p>
                    
                    <h3>2. Jawbone Preservation</h3>
                    <p>When you lose a tooth, the jawbone underneath begins to deteriorate due to lack of stimulation. Implants are the only tooth replacement option that stimulates the bone, preventing bone loss and preserving your facial structure over time.</p>
                    
                    <h3>3. Exceptional Durability</h3>
                    <p>While dentures and bridges typically need to be replaced every 5 to 10 years, dental implants are built to last. With proper care and regular checkups, an implant can last a lifetime, making it the most cost-effective long-term solution.</p>
                    
                    <h3>4. Zero Impact on Adjacent Teeth</h3>
                    <p>Traditional dental bridges require grinding down neighboring teeth to support the bridge. Implants are standalone structures, meaning they support themselves without compromising the health of adjacent healthy teeth.</p>
                ',
                'read_time' => '5 min read',
                'date' => 'June 18, 2026',
                'image' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Preventative Care: Simple Daily Habits for Healthy Family Smiles',
                'slug' => 'top-tips-for-family-dental-hygiene',
                'category' => 'Hygiene',
                'excerpt' => 'Dental care starts at home. Teach your family these simple preventative habits to keep plaque away and prevent expensive dental treatments.',
                'content' => '
                    <p>Preventative dentistry is the key to maintaining a healthy smile for life. By practicing simple, consistent hygiene habits at home, your family can prevent tooth decay, gum disease, and save on expensive dental procedures down the road.</p>
                    
                    <h3>1. The 2-Minute Rule</h3>
                    <p>Make sure everyone in the family brushes their teeth at least twice a day for a full two minutes. Use a soft-bristled toothbrush and fluoride toothpaste to protect enamel. Consider using a timer or a fun song to keep kids motivated.</p>
                    
                    <h3>2. Do Not Skip Flossing</h3>
                    <p>Brushing cleans only about 60% of the tooth surface. The remaining 40% lies between the teeth, where brush bristles cannot reach. Flossing daily is essential to remove trapped food debris and plaque before it hardens into tartar.</p>
                    
                    <h3>3. Limit Sugary and Acidic Foods</h3>
                    <p>Sugars feed the harmful bacteria in your mouth, which produce acids that attack tooth enamel. Limit sugary snacks, juices, and carbonated sodas. Encourage drinking plenty of water, which helps rinse away bacteria and debris.</p>
                    
                    <h3>4. Schedule Bi-Annual Cleanings</h3>
                    <p>Even the most thorough home care routine cannot remove hardened tartar. Professional cleanings every six months at our clinic are crucial. These visits also allow our lead specialist to catch any potential issues early.</p>
                ',
                'read_time' => '3 min read',
                'date' => 'June 12, 2026',
                'image' => 'https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Demystifying the Root Canal: Pain-Free Modern Techniques Explained',
                'slug' => 'understanding-root-canal-treatment',
                'category' => 'General Care',
                'excerpt' => 'Fear of root canals is a thing of the past. Learn how modern anesthesia and advanced equipment make root canals as pain-free as a standard filling.',
                'content' => '
                    <p>The phrase "root canal" has long carried an unfair reputation for causing severe discomfort. However, thanks to state-of-the-art dental technology and advanced local anesthetics, modern root canal therapy is no more painful than receiving a simple filling.</p>
                    
                    <h3>What is a Root Canal?</h3>
                    <p>A root canal is a restorative procedure used to save a tooth that is severely decayed, infected, or damaged. Inside each tooth is pulp containing nerves and blood vessels. If bacteria enter this pulp due to deep cavities or a cracked tooth, it causes infection and throbbing pain. The treatment removes the infected pulp, cleans the internal canal, and seals it.</p>
                    
                    <h3>Why Modern Root Canals Are Comfortable</h3>
                    <ul>
                        <li><strong>Advanced Anesthesia</strong>: We use premium local anesthetics to completely numb the area, ensuring you do not feel pain during the treatment.</li>
                        <li><strong>Rotary Endodontics</strong>: Modern electric rotary tools allow us to clean out canals faster, quieter, and with far greater precision than manual files.</li>
                        <li><strong>Laser Cleaning</strong>: Laser sterilisation kills bacteria deep inside the canals, increasing the success rate and speeding up recovery.</li>
                    </ul>
                    
                    <h3>Post-Treatment Care</h3>
                    <p>Most patients feel immediate relief from their toothache after a root canal. Mild soreness for a few days can easily be managed with over-the-counter pain relievers. We typically place a permanent crown on the tooth afterward to restore its full structural strength.</p>
                ',
                'read_time' => '4 min read',
                'date' => 'June 05, 2026',
                'image' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=600&auto=format&fit=crop'
            ]
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
