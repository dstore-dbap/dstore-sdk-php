<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_InsertPosting_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class FoInsertPostingPu
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
            "0a87100a326473746f72652f656e67696e652f70726f636564757265732f" .
            "666f5f496e73657274506f7374696e675f50752e70726f746f1221647374" .
            "6f72652e656e67696e652e666f5f496e73657274506f7374696e675f5075" .
            "1a136473746f72652f76616c7565732e70726f746f1a1a6473746f72652f" .
            "656e67696e652f656e67696e652e70726f746f22d50a0a0a506172616d65" .
            "74657273122b0a06726573756c7418012001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c756512140a0b726573756c745f" .
            "6e756c6c18e9072001280812400a1c706572736f6e5f6964656e74696669" .
            "636174696f6e5f76616c75657318022001280b321a2e6473746f72652e76" .
            "616c7565732e537472696e6756616c7565122a0a21706572736f6e5f6964" .
            "656e74696669636174696f6e5f76616c7565735f6e756c6c18ea07200128" .
            "0812330a0e706572736f6e5f747970655f696418032001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c7565121c0a137065" .
            "72736f6e5f747970655f69645f6e756c6c18eb0720012808122d0a09756e" .
            "697175655f696418042001280b321a2e6473746f72652e76616c7565732e" .
            "537472696e6756616c756512170a0e756e697175655f69645f6e756c6c18" .
            "ec0720012808122d0a08666f72756d5f696418052001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c756512160a0d666f72" .
            "756d5f69645f6e756c6c18ed072001280812380a137265706c795f746f5f" .
            "706f7374696e675f696418062001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512210a187265706c795f746f5f706f" .
            "7374696e675f69645f6e756c6c18ee0720012808122a0a06617574686f72" .
            "18072001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c756512140a0b617574686f725f6e756c6c18ef072001280812340a10" .
            "655f6d61696c5f6f665f617574686f7218082001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c7565121e0a15655f6d61696c" .
            "5f6f665f617574686f725f6e756c6c18f00720012808122b0a077375626a" .
            "65637418092001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c756512150a0c7375626a6563745f6e756c6c18f10720012808" .
            "12320a0d73656c6563745f726573756c74180a2001280b321b2e6473746f" .
            "72652e76616c7565732e426f6f6c65616e56616c7565121b0a1273656c65" .
            "63745f726573756c745f6e756c6c18f20720012808122f0a0a706f737469" .
            "6e675f6964180b2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c756512180a0f706f7374696e675f69645f6e756c6c18" .
            "f30720012808123d0a186d61696e7461696e5f7365617263685f706f7374" .
            "696e6773180c2001280b321b2e6473746f72652e76616c7565732e426f6f" .
            "6c65616e56616c756512260a1d6d61696e7461696e5f7365617263685f70" .
            "6f7374696e67735f6e756c6c18f40720012808123c0a17736176655f706f" .
            "7374696e675f70726f70657274696573180d2001280b321b2e6473746f72" .
            "652e76616c7565732e496e746567657256616c756512250a1c736176655f" .
            "706f7374696e675f70726f706572746965735f6e756c6c18f50720012808" .
            "122b0a07636f756e747279180e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512150a0c636f756e7472795f6e756c" .
            "6c18f60720012808123b0a17736570617261746f725f696e5f6964656e74" .
            "5f76616c73180f2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c756512250a1c736570617261746f725f696e5f6964656e" .
            "745f76616c735f6e756c6c18f7072001280812400a1b6e65775f706f7374" .
            "696e675f61735f6e6f745f617070726f76656418102001280b321b2e6473" .
            "746f72652e76616c7565732e426f6f6c65616e56616c756512290a206e65" .
            "775f706f7374696e675f61735f6e6f745f617070726f7665645f6e756c6c" .
            "18f8072001280822c6030a08526573706f6e736512380a106d6574615f69" .
            "6e666f726d6174696f6e18022003280b321e2e6473746f72652e656e6769" .
            "6e652e4d657461496e666f726d6174696f6e12270a076d65737361676518" .
            "032003280b32162e6473746f72652e656e67696e652e4d65737361676512" .
            "3c0a03726f7718042003280b322f2e6473746f72652e656e67696e652e66" .
            "6f5f496e73657274506f7374696e675f50752e526573706f6e73652e526f" .
            "77122f0a0a706f7374696e675f696418652001280b321b2e6473746f7265" .
            "2e76616c7565732e496e746567657256616c75651ae7010a03526f77120f" .
            "0a06726f775f696418904e2001280512300a0a706f7374696e675f696418" .
            "914e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c7565123f0a19706f7374696e675f63686172616374657269737469" .
            "635f696418924e2001280b321b2e6473746f72652e76616c7565732e496e" .
            "746567657256616c7565122a0a0576616c756518934e2001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512300a0a6572" .
            "726f725f636f646518944e2001280b321b2e6473746f72652e76616c7565" .
            "732e496e746567657256616c756542540a1b696f2e6473746f72652e656e" .
            "67696e652e70726f636564757265735a35676f73646b2e6473746f72652e" .
            "64652f656e67696e652f70726f636564757265732f666f5f496e73657274" .
            "506f7374696e675f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

