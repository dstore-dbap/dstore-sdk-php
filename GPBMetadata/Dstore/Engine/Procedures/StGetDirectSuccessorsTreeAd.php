<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetDirectSuccessors_Tree_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class StGetDirectSuccessorsTreeAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae2160a3d6473746f72652f656e67696e652f70726f636564757265732f" .
            "73745f476574446972656374537563636573736f72735f547265655f4164" .
            "2e70726f746f122c6473746f72652e656e67696e652e73745f4765744469" .
            "72656374537563636573736f72735f547265655f41641a136473746f7265" .
            "2f76616c7565732e70726f746f1a1a6473746f72652f656e67696e652f65" .
            "6e67696e652e70726f746f22cf080a0a506172616d657465727312330a0e" .
            "685f747265655f6e6f64655f696418012001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565121c0a13685f747265655f" .
            "6e6f64655f69645f6e756c6c18e9072001280812300a0966726f6d5f6461" .
            "746518022001280b321d2e6473746f72652e76616c7565732e54696d6573" .
            "74616d7056616c756512170a0e66726f6d5f646174655f6e756c6c18ea07" .
            "20012808122e0a07746f5f6461746518032001280b321d2e6473746f7265" .
            "2e76616c7565732e54696d657374616d7056616c756512150a0c746f5f64" .
            "6174655f6e756c6c18eb0720012808123d0a1862617369635f6368617261" .
            "6374657269737469635f6e6f3118042001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c756512260a1d62617369635f6368" .
            "6172616374657269737469635f6e6f315f6e756c6c18ec07200128081244" .
            "0a1f7765696768745f62617369635f63686172616374657269737469635f" .
            "6e6f3118052001280b321b2e6473746f72652e76616c7565732e44656369" .
            "6d616c56616c7565122d0a247765696768745f62617369635f6368617261" .
            "6374657269737469635f6e6f315f6e756c6c18ed0720012808123d0a1862" .
            "617369635f63686172616374657269737469635f6e6f3218062001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c75651226" .
            "0a1d62617369635f63686172616374657269737469635f6e6f325f6e756c" .
            "6c18ee072001280812440a1f7765696768745f62617369635f6368617261" .
            "6374657269737469635f6e6f3218072001280b321b2e6473746f72652e76" .
            "616c7565732e446563696d616c56616c7565122d0a247765696768745f62" .
            "617369635f63686172616374657269737469635f6e6f325f6e756c6c18ef" .
            "0720012808123d0a1862617369635f63686172616374657269737469635f" .
            "6e6f3318082001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c756512260a1d62617369635f636861726163746572697374" .
            "69635f6e6f335f6e756c6c18f0072001280812440a1f7765696768745f62" .
            "617369635f63686172616374657269737469635f6e6f3318092001280b32" .
            "1b2e6473746f72652e76616c7565732e446563696d616c56616c7565122d" .
            "0a247765696768745f62617369635f63686172616374657269737469635f" .
            "6e6f335f6e756c6c18f1072001280812400a1b736f757263655f7461626c" .
            "655f666f725f73746174697374696373180a2001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512290a20736f757263" .
            "655f7461626c655f666f725f737461746973746963735f6e756c6c18f207" .
            "2001280812380a13646973706c61795f6f6e6c795f616374697665180b20" .
            "01280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56616c" .
            "756512210a18646973706c61795f6f6e6c795f6163746976655f6e756c6c" .
            "18f3072001280822860c0a08526573706f6e736512380a106d6574615f69" .
            "6e666f726d6174696f6e18022003280b321e2e6473746f72652e656e6769" .
            "6e652e4d657461496e666f726d6174696f6e12270a076d65737361676518" .
            "032003280b32162e6473746f72652e656e67696e652e4d65737361676512" .
            "470a03726f7718042003280b323a2e6473746f72652e656e67696e652e73" .
            "745f476574446972656374537563636573736f72735f547265655f41642e" .
            "526573706f6e73652e526f771acd0a0a03526f77120f0a06726f775f6964" .
            "18904e2001280512300a0a747265655f6c6576656c18914e2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c756512310a" .
            "0b7072656465636573736f7218924e2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c7565122e0a086c6576656c5f6e6f" .
            "18934e2001280b321b2e6473746f72652e76616c7565732e496e74656765" .
            "7256616c756512450a1f72656c61746976655f76616c75655f6261736963" .
            "5f6368617261635f6e6f3318944e2001280b321b2e6473746f72652e7661" .
            "6c7565732e446563696d616c56616c756512450a1f72656c61746976655f" .
            "76616c75655f62617369635f6368617261635f6e6f3218954e2001280b32" .
            "1b2e6473746f72652e76616c7565732e446563696d616c56616c75651245" .
            "0a1f72656c61746976655f76616c75655f62617369635f6368617261635f" .
            "6e6f3118964e2001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c756512370a11746f74616c5f76616c75655f696e646578" .
            "18974e2001280b321b2e6473746f72652e76616c7565732e446563696d61" .
            "6c56616c7565123a0a1472656c61746976655f76616c75655f696e646578" .
            "18984e2001280b321b2e6473746f72652e76616c7565732e446563696d61" .
            "6c56616c756512350a106e6f64655f6465736372697074696f6e18994e20" .
            "01280b321a2e6473746f72652e76616c7565732e537472696e6756616c75" .
            "65122c0a06616374697665189a4e2001280b321b2e6473746f72652e7661" .
            "6c7565732e426f6f6c65616e56616c756512360a106861735f6e6578745f" .
            "7369626c696e67189b4e2001280b321b2e6473746f72652e76616c756573" .
            "2e426f6f6c65616e56616c756512420a1c746f74616c5f76616c75655f62" .
            "617369635f6368617261635f6e6f31189c4e2001280b321b2e6473746f72" .
            "652e76616c7565732e446563696d616c56616c756512340a0e685f747265" .
            "655f6e6f64655f6964189d4e2001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512420a1c746f74616c5f76616c7565" .
            "5f62617369635f6368617261635f6e6f32189e4e2001280b321b2e647374" .
            "6f72652e76616c7565732e446563696d616c56616c756512420a1c746f74" .
            "616c5f76616c75655f62617369635f6368617261635f6e6f33189f4e2001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "6512480a226d61785f72656c61746976655f76616c75655f7065725f7072" .
            "656465636573736f7218a04e2001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c756512320a0c747265655f6e6f64655f69" .
            "6418a14e2001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c7565122d0a076e6f64655f696418a24e2001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c756512470a216d61" .
            "785f72656c61746976655f76616c75655f696e6465785f7065725f707265" .
            "6418a34e2001280b321b2e6473746f72652e76616c7565732e446563696d" .
            "616c56616c7565122e0a0966726f6d5f6461746518a44e2001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c7565122c0a0774" .
            "6f5f6461746518a54e2001280b321a2e6473746f72652e76616c7565732e" .
            "537472696e6756616c756512340a0e6861735f737563636573736f727318" .
            "a64e2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e" .
            "56616c7565122d0a0764656c6574656418a74e2001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c7565425f0a1b696f2e64" .
            "73746f72652e656e67696e652e70726f636564757265735a40676f73646b" .
            "2e6473746f72652e64652f656e67696e652f70726f636564757265732f73" .
            "745f476574446972656374537563636573736f72735f547265655f416462" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

